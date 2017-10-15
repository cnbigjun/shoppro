<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Good;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function goods($goods_id)
    {
    	$goods = Good::where('is_on_sale',1)->find($goods_id);
        return view('home.goods',['goods'=>$goods]);
    }

}
