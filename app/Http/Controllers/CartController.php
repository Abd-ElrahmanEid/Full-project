<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

session_start();


class CartController extends Controller
{
    public function Cart(){
        $products = $_SESSION['cart'];
        return view('cart', compact('products'));

    }


    public function AddToCart(int $id){

        $products = Product::find($id)->toArray();

        if(!isset($_SESSION['cart'])){
            $_SESSION['cart'] = [];
        }

        $cart = $_SESSION['cart'];

        $cart[] = $products;

        $_SESSION['cart'] = $cart;

        return redirect()->back()->with('success' , 'Product Added to Cart');
    }


    public function RemoveFromCart(int $id){

        $cart = $_SESSION['cart'];

        $newCart = array_filter($cart, fn($item) => $item['id'] != $id);

        $_SESSION['cart'] = $newCart;

        return redirect()->back()->with('success' , 'Product Deleted From Cart');

    }
}
