@extends('master')
@section("content")
{{View::make('header')}}
<div class="container1">
  <div class="payment_wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="payment_left">
                  <div class="image"><img src="{{ asset('storage/gallery/payment.jpg') }}" alt=""></div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="payment_right">
                    <h1>Input Your Payment Details</h1>
                    <form>
                        <label class="payment_right-lbl">
                            Name on Card
                            <input type="text" class="payment_right-txt">
                        </label>
                        <label class="payment_right-lbl">
                            Card Number
                            <input type="text" class="payment_right-txt">
                        </label>
                        <label class="payment_right-lbl">
                            Expiration Date
                            <input type="text" class="payment_right-txt">
                        </label> 
                        <label class="payment_right-lbl">
                            CVV
                            <input type="text" class="payment_right-txt">
                        </label>
                    </form>
                    <ul>
                        <li><a href="#"><i class="fa fa-cc-visa"aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-amex" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-discover" aria-hidden="true"></i></a></li>
                    </ul>
                    <h1>Order Summary</h1>
                    
                    <table>
                        <tr>
                            <td>Services   <span> Rs {{$total}}</span></td>
                        </tr>
                        <tr>  
                            <td>Tax <span> Rs  10</span></td>
                        </tr> 
                        <tr>
                            <td>Sub Total <span> Rs {{$total+10}}</span></td>
                        </tr>
                        <tr>
                            <td><b>Total <span> Rs {{$total+10}}</span></b></td>
                        </tr>
                    </table>
                    <form action="/orderplace" method="POST">
                      @csrf
                      <div class="form-group" hidden>
                        <input type="radio" value="cash" name="payment" checked> <span>Online payment</span> <br> <br>
                      </div>
                      <button class="payment_right_btn">Pay Now</button>
                  </form>
                  
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<style>
  @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.container1 {
    width: 100%;
    height: 100vh;
    display: grid;
    place-items: center;
}

.payment_wrap {
    width: 100%;
    height: auto;
}

.payment_left {
    width: 100%;
    height: auto;
}

.payment_left .image {
    width: 100%;
    height: auto;
}

.payment_left .image img {
    width: 100%;
    height: 644px;
    object-fit: cover;
}

.payment_right {
    width: 100%;
    height: auto;
}

.payment_right h1 {
    font-size: 26px;
    font-family: 'Roboto', sans-serif;
    margin-top: 0;
    letter-spacing: 1px;
    margin-bottom: 20px;
    font-weight: bolder;
}

.payment_right-lbl {
    width: 100%;
    height: auto;
    color: #999;
    font-weight: 100;
    font-family: 'Roboto', sans-serif;
    font-size: 13px;
    margin-bottom: 20px;
}

.payment_right-lbl:nth-child(3) {
    width: 49%;
    float: left;
}

.payment_right-lbl:nth-child(4) {
    width: 49%;
    float: right;
}

.payment_right-txt {
    width: 100%;
    height: 30px;
    margin-top: 5px;
    font-size: 16px;
    border: none;
    border-bottom: 2px solid #999;
    color: #000;
    outline: none;
    transition: .5s;
}

.payment_right-txt:focus {
    border-bottom: 2px solid #9400D3;
    transition: .5s;
}

.payment_right ul {
    padding: 0;
    margin: 0;
}

.payment_right ul li {
    list-style: none;
    display: inline-block;
    margin-right: 10px;
    margin-bottom: 20px;
}

.payment_right ul li a {
    display: block;
}

.payment_right ul li i {
    font-size: 30px;
    color: #000;
}

.payment_right table {
    width: 100%;
}

.payment_right table tr {
    width: 100%;
}

.payment_right table tr td {
    color: #aaa;
    width: auto;
    font-size: 16px;
    padding: 15px 0px;
    font-family: 'Roboto', sans-serif;
    border-bottom: 1px solid #999;
}

.payment_right table tr td span {

    float: right;
}

.payment_right_btn {
    width: 100%;
    padding: 10px 0px;
    margin-top: 25px;
    background: #9400D3;
    color: #fff;
    text-transform: uppercase;
    border: none;
    outline: none;
    font-family: 'Roboto', sans-serif;
}
  </style>


@endsection 