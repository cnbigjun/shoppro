<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MemController extends Controller
{
    public function index(){
        return view('home/member');
    }
    public function order(){
        return view('home/order');
    }
}
