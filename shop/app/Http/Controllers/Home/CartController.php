<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cart;
use App\CartItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        return view('home/cart');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addCart (Request $req,$goods_id){

        $cart = Cart::where('user_id',Auth::user()->id)->first();

        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }

        $cartItem  = new Cartitem();
        $cartItem->goods_id=$goods_id;
        $cartItem->cart_id= $cart->id;
        $cartItem->save();
//        $cartdrop=CartItem::where('goods_id','=',$goods_id)->first();
//        $cartdrop->delete();
//        exit;
        return redirect('/cart');

    }

    public function showCart(Request $req){
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
            $cart_id=$item->cart_id;
            $number+=1;
        }
        $req->session()->put('cartnum', $number);
//        print_r($cart_id);exit;
        return view('home.cart',['items'=>$items,'total'=>$total,'number'=>$number]);
    }

    public function removeItem(Request $req,$id){

        CartItem::destroy($id);
        return redirect('/cart');
    }
}
