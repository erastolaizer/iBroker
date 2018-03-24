@extends('userdashboard.app')

@section('center')
      <div class="panel panel-default">
         <div class="panel-heading">Dashboard</div>
          <div class="panel-body">
<ul>

    <li class="dropdown">
      <a href="#" class="dropdown-toggle btn btn-info" data-toggle="dropdown" role="button" aria-expanded="false">lipa karo <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li>  <a href="{{ route('lipa_karo') }}" class="btn btn-link">shule</a></li>
            <li>  <a href="{{ route('lipa_karo') }}" class="btn btn-link">university</a></li>
          </ul>
      </li>
</ul>

                  </div>
              </div>

          </div>
@endsection
