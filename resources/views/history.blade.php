@extends('userdashboard.app')

@section('center')
@if(Session::has('payment'))
<div class="alert alert-success" role="alert">
<strong>Hongera::</strong>{{Session::get('payment')}}
</div>
@endif
<div class="panel panel-default">
    <div class="panel-heading">Historia ya Malipo</div>
    <div class="panel-body">
<table class="table table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Shule</th>
        <th>Mlipaji</th>
        <th>mwanafunzi</th>
        <th>kiasi</th>
        <th>code</th>
        <th>Tarehe</th>

    </tr>
    </thead>
     <tbody>
     @foreach($payments as $index => $payment)
     <tr>
         <td>{{$index + 1}}</td>
         <td>{{$payment->school}}</td>
         <td>{{$payment->mlipaji}}</td>
         <td>{{$payment->mwanafunzi}}</td>
         <td>{{$payment->amount}}</td>
         <td>{{$payment->code}}</td>
         <td>{{$payment->created_at}}</td>
        @endforeach
     </tbody>
  </table>


              </div>
            </div>
          </div>

@endsection
