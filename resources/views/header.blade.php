<?php
use App\Http\Controllers\serviceController;
$total=0;
if(Session::has('user'))
{
    $total=serviceController::cartservice();
}
?>

<style>
.navbar {
    background: rgba(145, 143, 144, 0.2);
    backdrop-filter: blur(10px);
    position: sticky;
    top: 0;
    z-index: 1000;
    border-bottom: 2px solid rgba(19, 17, 17, 0.1);
}

.navbar-brand {
    font-weight: bold;
    font-size: 1.5em;
}

.navbar-nav li a {
    font-weight: normal;
    font-size: 1em;
}
</style>


<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">One Day Digital</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            @if(Session::has('user'))
            <li><a href="/myorders">Ordered Services</a></li>
            @endif
          </ul>

          <ul class="nav navbar-nav navbar-right">
            @if(Session::has('user'))
            <li><a href="/cartlist">Cart({{$total}})</a></li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="profile-icon" role="button">
                <img src="{{ asset('storage/gallery/user.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
              </a>
              <div class="pop-up-box" id="pop-up-box">
                <img class="profile-icon" src="{{ asset('storage/gallery/user.png') }}" width="50" height="50" alt="">
                <p><span class="label">Name</span><br>{{Session::get('user')['name']}}</p>
                <p><span class="label">Email</span><br>{{Session::get('user')['email']}}</p>
                <a class="logout" href="/logout">Logout</a>
            </div>
            </li>
            @else
            <li><a href="/login">Login</a></li>
            <li><a href="/Register">Sign Up</a></li>
            @endif
          </ul>
        </div>
      </div>
</nav>

<script>
$(document).ready(function(){
    $("#profile-icon").click(function(e){
        e.stopPropagation();
        $("#pop-up-box").toggle();
    });

    $(document).click(function(){
        $("#pop-up-box").hide();
    });
});
</script>

<style>
  .pop-up-box {
      display: none;
      position: absolute;
      right: 0;
      background: rgba(0, 0, 0, 0.7);
      color: white;
      border-radius: 10px;
      padding: 10px;
      z-index: 1001;
      width: auto;
      max-width: none; /* Remove the maximum width */
      text-align: right;
  }
  
  .pop-up-box .profile-icon {
      display: block;
      margin: 0 auto;
  }
  
  .pop-up-box .name, .pop-up-box .email {
      font-size: 1em;
      word-wrap: break-word; /* Break words if they are too long */
  }
  
  .pop-up-box .logout {
      display: block;
      margin: 10px auto;
      text-align: center; /* Center align the logout button */
  }
  
  /* Add styles for the labels and lines */
  .pop-up-box .label {
      font-weight: bold;
      border-bottom: 1px solid white;
      display: inline-block;
      width: 100%;
  }
  </style>