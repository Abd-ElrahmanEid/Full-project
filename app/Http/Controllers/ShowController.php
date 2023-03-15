<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function showproduct(int $id){
        $products = Product::where('id' , $id)->first();
        return view('about' , compact('products'));
    }
}
