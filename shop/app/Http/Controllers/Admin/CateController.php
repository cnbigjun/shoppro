<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cate;
class CateController extends Controller
{
    /**
     * 后台栏目侧边栏展示
     * @return array() list
     */
    public function index(){
        $cates = Cate::where('is_enabled', 1)->where('parent_id', 0)->get();
        $cate_son = Cate::where('is_enabled', 1)->where('parent_id', '>', 0)->get();

        return  view('admin.Base.sidebar', ['cate_list' => ['cates' => $cates, 'son' => $cate_son]]);
    }

    /**
     * 添加后台栏目
     * @return bool true
     */
    public function cate_list(){
        return view('admin.Cate.cate_list');
    }
}
