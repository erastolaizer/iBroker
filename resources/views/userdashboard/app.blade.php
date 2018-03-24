@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
                <div class="col-md-2">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <table class="table table-stripped">
                          <tr><td><a href="{{route('lipa_karo')}}" class="text-success">My Profile</a></td></tr>
                          <tr><td> <a href="{{route('history')}}">Historia ya Malipo</a> </td></tr>
                          <tr><td><a href="{{route('lipa_karo')}}">Deposit</a></td></tr>
                          <tr><td> <a href="{{route('lipa_karo')}}">Account Info</a> </td></tr>
                          <tr><td><a href="{{route('lipa_karo')}}">How to pay</a></td></tr>
                          <tr><td><a href="{{route('lipa_karo')}}">Help</a></td></tr>
                          <tr><td><a href="{{route('lipa_karo')}}">Contacts</a></td></tr>
                        </table>
                      </div>
                    </div>
                  </div>
        <div class="col-md-10">

       @yield('center')

        </div>
    </div>
</div>
@endsection
