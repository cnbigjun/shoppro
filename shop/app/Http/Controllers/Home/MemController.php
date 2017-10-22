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
    public function order(Request $req){
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
        return view('home.order',['items'=>$items,'total'=>$total,'number'=>$number,'cart_id'=>$cart_id]);
    }
    public function pay(Request $req,$cart_id)
    {
        // dd($req->all());
        $row=[];
        $row['v_amount']=$req->money;
        $row['v_moneytype']='CNY';
        $row['v_oid']=date('YmdHis').mt_rand(1000,9999);
        $row['v_mid']='1009002';
        $row['v_url']='http://zh.com/paydone/'.$cart_id;
        $row['key']='DJFKklslkdf%78ew9@@@@';
        $row['v_md5info']=strtoupper(md5(implode('',$row)));
        $row['items']=CartItem::where('cart_id','=',$cart_id)->get();
        return view('home.pay',$row);

    }
    public function  payDone(Request $req,$cart_id){
        $md5=strtoupper(md5($req->v_oid . $req->v_pstatus . $req->v_amount . $req->v_moneytype . 'DJFKklslkdf%78ew9@@@@'));
        if ($md5!==$req->v_md5str) {
            return redirect('/');
        }
        $cart = Cart::where('user_id',Auth::user()->id)->first();
        $req->session()->put('cartnum', 0);
        return $cart->delete()?redirect('/'):'订单支付失败';
//        return redirect('/');

    }


}
