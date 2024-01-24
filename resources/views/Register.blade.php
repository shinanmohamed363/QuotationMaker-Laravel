@extends('master')
@section('content')
<div class='container custom-login'>
    <div class ="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="register"method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="enter your Name">
                </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="enter your email">
                    </div>
                    <div class="form-group">
                        <label for="password">password:</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
            </form>
    </div>
</div>
@endsection