<?php
namespace App\Http\Controllers;
use App\school;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Validator;
use App\payment;
use Session;

class KaroController extends Controller
{

    public function index()
    {
   $schools= school::all();
   $users = User::all();
   return view('lipa_karo',compact('schools','users'));
    }

    public function create(Request $request)
    {
      $formData = $request->all();
      $validations = [
         'amount' => 'required',
         'school' => 'required',
         'mwanafunzi' => 'required',
         'kidato' => 'required',
          'mlipaji' => 'required'
      ];
      $validation = Validator::make($formData, $validations);
        if($validation->fails()) {
            return Response::json(['success' => false, 'errors' => $validation->errors()->toArray()]);
        } else{
      $schools = school::where('name', $formData['school'])->first();
      $payments = new payment();

      $payments->school = $formData['school'] ;
      $payments->account_number = $schools->account_number;
      $payments->mlipaji = $formData['mlipaji'];
      $payments->mwanafunzi = $formData['mwanafunzi'];
      $payments->kidato = $formData['kidato'];
      $payments->amount = $formData['amount'];
      $payments->user_id = Auth::user()->id;
      $payments->code = $this->getPaymentCode();
      $payments->save();

      Session::flash('payment','Umefanikiwa kulipa karo');
      return redirect()->route('history');
    }
    }
    //generating random payment code
    public function getPaymentCode(){
       do{
           $rand = $this->generateRandomString(8);
        }while(!empty(payment::where('code',$rand)->first()));
         return $rand;
      }

  public function generateRandomString($length) {
      $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
      //end of generating random code
   }

    public function history()
    {
      $payments=payment::where('user_id', Auth::user()->id)->get();
      return view('history',compact('payments'));
    }
}
