<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function add(){

        return view('admin/addcate');
    }
    public function addPost(Request $req){
        $cate=new Category();
        $cate->cat_name=$req->cat_name;
        $cate->intro=$req->intro;
        $cate->parent_id=$req->parent_id;
        $cate->save();
        return redirect('admin/addcate')->with('message', '添加分类成功');
    }
    public function cates(){
        $cates=Category::all();
        return view('admin/cates',['cates'=>$cates]);
    }
}
