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
    public function  del($cat_id){
        $cate=Category::find($cat_id);
        return $cate->delete()?redirect('admin/cates')->with('message', '删除分类成功'):"fail";
    }
    public function  edit($cat_id){
        $cate=Category::where('cat_id',$cat_id)->first();
        return view('admin.editcate',  ['cate'=>$cate]);
    }
    public function  editPost(Request $req,$cat_id){
        $cate=Category::where('cat_id',$cat_id)->first();
        $cate->cat_name=$req->cat_name;
        $cate->intro=$req->intro;
        $cate->parent_id=$req->parent_id;
        return $cate->save()?redirect("admin/editcate/$cat_id")->with('message', '修改分类成功'):"修改失败";
    }
}
