<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Good;
use App\Category;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function catlist($cat_id)
    {
    	$categorys = Category::where('parent_id',0)->get();
    	$goods = Good::where('cat_id',$cat_id)->get();
        return view('home.catlist',['goods'=>$goods,'categorys'=>$categorys]);
    }

}
