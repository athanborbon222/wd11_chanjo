<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
    
        return view('admin.dashboard');
    }

    public function product(){
    
        return view('admin.product');
    }

    public function StoreManagement(){
    
        return view('admin.StoreManagement');
    }

     public function ManagePage(){
    
        return view('admin.ManagePage');
    }

     public function reports(){
    
        return view('admin.reports');
    }
   
}
