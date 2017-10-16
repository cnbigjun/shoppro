<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Good;
use App\Category;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$goods = Good::where('is_on_sale',1)->take(16)->get();
    	$categorys = Category::where('parent_id',0)->get();
        return view('home/index',['goods'=>$goods,'categorys'=>$categorys]);
    }

}
