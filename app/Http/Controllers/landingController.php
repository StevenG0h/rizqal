<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('cozzastore/index');
    }
    public function product(){
        return view('cozzastore/product');
    }
    public function about(){
        return view('cozzastore/about');
    }
}
