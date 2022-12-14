<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // 
    public function index(){
        return view('pages.index');
    }

     public function aboutus(){
        return view('pages.aboutus');
    }

    public function faqs(){
        return view('pages.faqs');
    }

     public function products(){
        return view('pages.products');
    }

     public function termsconditions(){
        return view('pages.termsconditions');
    }

     public function privacypolicy(){
        return view('pages.privacypolicy');
    }

     public function cart(){
        return view('pages.cart');
    }

     public function checkout(){
        return view('pages.checkout');
    }
    
    public function contactus(){
        return view('pages.contactus');
    }


}
