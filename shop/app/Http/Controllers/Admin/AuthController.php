<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{

    /**
     * 后台登陆信息
     * @return string url
     */
    public function getLogin(){
        return view('admin.auth.login');
    }

    public function postLogin(Request $req){
        // 判断是否登陆
        if(Auth::check()){
            return redirect('/admin/index');
        }
        //$this->validate($req, $this->rules());
        $name = $req->get('name');
        $password = $req->get('password');

        // 验证登陆信息
        if(Auth::attempt(['name' => $name, 'password' => $password])){
            return redirect('/admin/index');
        }

        else {
            return redirect('/admin/login');
        }
    }

    // public function rules()
    // {
    //     return [
    //         'name' => 'required|digits:10',
    //         'password' => 'required'
    //         ];
    // }
}
