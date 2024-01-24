<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use App\Models\Cart;
use Session;

class serviceController extends Controller
{
    function index()
    {
        $data=service::all();
        return view('service',['services'=>$data]);
    }
    function detail($id)
    {
       $data= service::find($id);
       return view('detail',['services'=>$data]);
    }

    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
           $cart= new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->service_id=$req->service_id;
           $cart->save();
           return redirect('/');

        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartservice()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();

    }
}
