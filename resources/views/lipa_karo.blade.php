@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ route('lipa/karo') }}">
                      {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('school') ? ' has-error' : '' }}">
                              <label for="school" class="col-md-4 control-label">Chagua Shule</label>
                                <div class="col-md-6">
                                  <select class="form-control select" name="school" >
                                       <option selected="selected" disabled><small>--Select--</small></option>
                                       @foreach($schools as $school)
                                       <option value="{{$school->name}}">{{$school->name}}</option>
                                     @endforeach
                                   </select>
                                   @if ($errors->has('school'))
                                       <span class="help-block">
                                           <strong>{{ $errors->first('school') }}</strong>
                                       </span>
                                   @endif
                               </div>
                            </div>

                      <div class="form-group{{ $errors->has('mlipaji') ? ' has-error' : '' }}">
                          <label for="mlipaji" class="col-md-4 control-label">Jina la mlipaji</label>

                          <div class="col-md-6">
                              <input id="mlipaji" type="text" class="form-control" name="mlipaji" required>

                              @if ($errors->has('mlipaji'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('mlipaji') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group" id="amount-error"></div>
                      </div>
                      <div class="form-group{{ $errors->has('mwanafunzi') ? ' has-error' : '' }}">
                          <label for="mwanafunzi" class="col-md-4 control-label">Jina la mwanafunzi</label>

                          <div class="col-md-6">
                              <input id="mwanafunzi" type="text" class="form-control" name="mwanafunzi" required>

                              @if ($errors->has('mwanafunzi'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('mwanafunzi') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('kidato') ? ' has-error' : '' }}">
                        <label for="kidato" class="col-md-4 control-label">Chagua kidato</label>
                          <div class="col-md-6">
                            <select class="form-control select" name="kidato" >
                                 <option selected="selected" disabled><small>--kidato--</small></option>
                                 <option value=1>1</option>
                                 <option value=2>2</option>
                                 <option value=3>3</option>
                                 <option value=4>4</option>
                                 <option value=5>5</option>
                                 <option value=6>6</option>
                             </select>
                             @if ($errors->has('kidato'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('kidato') }}</strong>
                                 </span>
                             @endif
                         </div>
                      </div>

                      <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                          <label for="amount" class="col-md-4 control-label">Kiasi</label>

                          <div class="col-md-6">
                              <input id="amount" type="text" class="form-control" name="amount" required>

                              @if ($errors->has('amount'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('amount') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                             <button type="submit" class="btn btn-info"> LIPA</button>
                              <a href="{{ route('home') }}" class="btn btn-danger pull-center">CANCEL</a>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
