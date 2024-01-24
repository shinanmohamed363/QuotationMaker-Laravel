<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\service;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\quotation;

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
    function cartList()
    {
        $userId=Session::get('user')['id'];
        $services= DB::table('cart')
         ->join('services','cart.service_id','=','services.id')
         ->where('cart.user_id',$userId)
         ->select('services.*','cart.id as cart_id')
         ->get();

        return view('cartlist',['services'=>$services]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow(){
        $userId=Session::get('user')['id'];
        $total=  DB::table('cart')
         ->join('services','cart.service_id','=','services.id')
         ->where('cart.user_id',$userId)
         ->select('services.*','cart.id as cart_id')
         ->sum('services.price');

        return view('ordernow',['total'=>$total]);
         
    }
    function orderplace(request $req)
    {
        $userId=Session::get('user')['id'];
        $allCart=Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
                $subject = DB::table('cart')
                ->join('services','cart.service_id','=','services.id')
                ->where('cart.user_id',$userId)
                ->select('services.*','cart.id as cart_id')
                ->get();

                $mails=Session::get('user')['email'];
                 
                if ($this->isOnline()){
                    $mail_data=[
                        'recipent'=>'shinanmohamed363@gmail.com',
                        'fromEmail'=>$mails,
                        'fromName'=>$mails,
                        'subject'=>'Quotation',
                        'body'=>$subject,
                    ];
                    \Mail::send('email-template',$mail_data,function($message)use($mail_data){
                        $message->to($mail_data['recipent'])
                        ->from($mail_data['fromEmail'],$mail_data['fromName'])
                        ->subject($mail_data['subject']); 
                    });
                }
                else
                {
                    return "no connection";
                }



                $quotation=new quotation;
                $quotation->service_id=$cart['service_id'];
                $quotation->user_id=$cart['user_id'];
                $quotation->payment_method=$req->payment;
                $quotation->save();

                Cart::where('user_id',$userId)->delete();
        }
        
       $req->input();
        return redirect('/');

        
    }
    public function isOnline($site="https://youtube.com/"){
        if(@fopen($site,"r")){
            return true;
        }else{
            return false;
        }
    }
}
