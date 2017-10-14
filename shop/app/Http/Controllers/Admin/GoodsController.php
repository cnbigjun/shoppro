<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Good;
class GoodsController extends Controller
{
    public function add(){

        return view('admin/addgood');
    }
    public function addPost(Request $req){
        //1013解决了  在input name中加[]数组对象
//        $Origname = $req->goodsimg1->getClientOriginalName();
//        $src = "H:/pic/".$Origname;
//        $realPath = $value->getRealPath();
//         var_dump( $req->goodsimg);
//        foreach ($req->goodsimg as $key => $value) {
//            $Origname = $value->getClientOriginalName();
//            $src = "H:/pic/".$Origname;
//            $realPath = $value->getRealPath();
//            var_dump($value);
//        }


        $path=str_replace('\\','/',base_path());
        $randthumb=substr(str_shuffle(md5(time().rand(100,999))),0,8);
        $paththumb=$path.'/'.$randthumb.'.png';
        $req->file('thumbimg')->move($path.'/public/upload/',$randthumb.'.png');
        if($req->hasFile("goodsimg")){
            $pathgoods='';
            foreach($req->file("goodsimg") as $file) {
                $randgoods=substr(str_shuffle(md5(time().rand(100,999))),0,8);
                $file->move(base_path().'/public/upload/', $randgoods.'.png');
                $tmp=$randgoods.'.png,';
                //解决字符串过长 取的时候加完整目录
                $pathgoods.=$tmp;
            }
        }
//        $goods=explode(',',$pathgoods);
//        print_r($goods);
//        exit();
        $good=new Good();
        $good->goods_name=$req->goods_name;
        $good->cat_id=$req->cat_id;
        $good->plus_price=$req->plus_price;
        $good->market_price=$req->market_price;
        $good->goods_number=$req->goods_number;
        $good->goods_keywords=$req->goods_keywords;
        $good->goods_brief=$req->goods_brief;
        $good->goods_desc=$req->goods_desc;
        $good->thumb_img=$paththumb;
        $good->goods_img=$pathgoods;
        if ($req->is_best==null){
            $good->is_best=0;
        }else{
            $good->is_best=$req->is_best;
        }
        if ($req->is_new==null){
            $good->is_new=0;
        }else{
            $good->is_new=$req->is_new;
        }
        if ($req->is_hot==null){
            $good->is_hot=0;
        }else{
            $good->is_hot=$req->is_hot;
        }
        $good->save();
        return redirect('admin/addgood')->with('message', '添加商品成功');
    }
    public function goods(){
        $goods=Good::all();
        return view('admin/cates',['goods'=>$goods]);
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
