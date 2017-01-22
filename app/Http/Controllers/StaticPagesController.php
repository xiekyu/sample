<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
    //地址控制器
    public function home(){
        return view('static_pages/home');
    }

    public function help(){
        return 'static_pages/help';
    }

    public function about(){
        return 'static_pages/about';
    }
}
