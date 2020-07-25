<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('user.frontend.about');
    }

     public function services()
    {
        return view('user.frontend.services');
    }

     public function pricing()
    {
        return view('user.frontend.pricing');
    }

     public function shop()
    {
        return view('user.frontend.shop');
    }

     public function blog()
    {
        return view('user.frontend.blog');
    }

    public function shopSingle()
    {
        return view('user.frontend.shop-single'); 
    }
}
