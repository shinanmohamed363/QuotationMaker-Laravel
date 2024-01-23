@extends('master')
@section('content')
<div class='container custom-login'>
    <div class ="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email" placeholder="enter your email">
                    </div>
                    <div class="form-group">
                        <label for="password">password:</label>
                        <input type="password" class="form-control" id="password" placeholder="enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</div>
@endsection