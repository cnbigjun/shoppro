<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cart;
use App\CartItem;
use Illuminate\Support\Facades\Auth;

class MemController extends Controller
{
    public function index(){
        return view('home/member');
    }
    public function order(){
        $cart = Cart::where('user_id',Auth::user()->id)->first();

        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }

        $items=$cart->cartItems;
        $number=0;
        $total=0;
        foreach ($items as $item){
            $total+=$item->good->plus_price;
            $number+=1;
        }
        return view('home.order',['items'=>$items,'total'=>$total,'number'=>$number]);
    }
}
