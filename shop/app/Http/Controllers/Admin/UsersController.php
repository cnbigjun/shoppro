<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Hash;

class UsersController extends Controller
{
    public function  getRegister(){
        return view('admin.auth.register');
    }

    public function postRegister(Request $req){

        $validator = Validator::make($req->all(), [
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|alpha_num|between:4,12',
            //'password_confirmation'=>'required|alpha_num|between:6,12'
        ]);

        if($validator->passes()){
            $models = new User;
            $models->name = $req->name;
            $models->email = $req->email;
            $models->password = Hash::make($req->password);
            $models->save();

            return redirect('admin/login')->with('message', '注册成功！');
        } else {
            return redirect('users/register')->with('message', '请您正确填写下列数据')->withErrors($validator)->withInput();
        }
    }
}
