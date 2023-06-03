<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function about(){
        return view('frontend.about');
    
    }
    public function news(){
        return view('frontend.news');
    }

    public function contact(){
        return view('frontend.contact');
    
    }
    public function menu(){
        return view('frontend.menu');
    }
    
    public function newsDetail(){
        return view('frontend.news-detail');
    }

}
