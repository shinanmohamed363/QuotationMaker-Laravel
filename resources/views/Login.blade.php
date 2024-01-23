@extends('master')
@section('content')
<div class='container custom-login'>
    <div class ="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login"method="POST">
                    <div class="form-group">
                        @csrf
                        <label for="email">Email address:</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="enter your email">
                    </div>
                    <div class="form-group">
                        <label for="password">password:</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
            </form>
    </div>
</div>
@endsection