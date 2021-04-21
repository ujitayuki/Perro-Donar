<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function auth(){
        return view('auth.Login');
    }

    public function auth2(){
        return view('auth.Register');
    }

    public function index(){
        return view('top');
    }


    public function about(){
        return view('about');
    }


    public function news(){
        return view('news');
    }


    public function commercial(){
        return view('commercial');
    }
}
