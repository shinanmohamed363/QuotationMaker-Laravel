@extends('master')
@section("content")
<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="{{$services['gallery']}}" alt="">
       </div>
       <div class="col-sm-6">
           <a href="/">/Home</a>
       <h2>{{$services['name']}}</h2>
       <h3>Price : {{$services['price']}}</h3>
       <h4>Details: {{$services['description']}}</h4>
       <h4>category: {{$services['category']}}</h4>
       <br><br>
       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="text" name="service_id" value={{$services['id']}}>
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>
       <button class="btn btn-success">Buy Service Now</button>
       <br><br>
    </div>
   </div>
</div>
@endsection