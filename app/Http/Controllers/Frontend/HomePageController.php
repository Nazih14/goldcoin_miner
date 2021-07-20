<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        return view('frontend.page.index');
    }
    
    public function about(){
        return view('frontend.page.about');
    }

    public function gallery(){
        return view('frontend.page.gallery');
    }


}
