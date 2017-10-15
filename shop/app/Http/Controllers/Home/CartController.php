<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cart;
use App\CartItem;

class CartController extends Controller
{
    public function index(){
        return view('home/cart');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addItem ($goods_id){

        $cart = Cart::where('user_id',Auth::user()->id)->first();

        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }

        $cartItem  = new Cartitem();
        $cartItem->product_id=$goods_id;
        $cartItem->cart_id= $cart->id;
        $cartItem->save();

        return redirect('/cart');

    }

    public function showCart(){
        $cart = Cart::where('user_id',Auth::user()->id)->first();

        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }

        $items = $cart->cartItems;
        $total=0;
        $number=0;
        foreach($items as $item){
            $total+=$item->goods->plus_price;
            $number+=1;
        }

        return view('home.cart',['items'=>$items,'total'=>$total,'number'=>$number]);
    }

    public function removeItem($id){

        CartItem::destroy($id);
        return redirect('/cart');
    }
}
