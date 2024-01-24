<?php
use App\Http\Controllers\serviceController;
$total=0;
if(Session::has('user'))
{
    $total=serviceController::cartservice();
}


?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">

    
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">One Day Digital Services</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="/myorders">Orders</a></li>
          </ul>
         
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/cartlist">cart({{$total}})</a></li>
            @if(Session::has('user'))
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/logout">Logout</a></li>
              </ul>
            </li>
            @else
            <li><a href="/login">Login</a></li>
            @endif
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
  </nav>