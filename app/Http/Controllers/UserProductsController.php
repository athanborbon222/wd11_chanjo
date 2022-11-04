<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class UserProductsController extends Controller
{
    // 
    public function show(){
        $products = Products::all();
        return view('userproducts.index')->with('products', $products);
        
    }
}
