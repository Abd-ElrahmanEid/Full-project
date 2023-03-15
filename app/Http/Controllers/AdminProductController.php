<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.adminviewproduct' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.adminproduct' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddProductRequest $request)
    {
        $path = $request->file('image')->store('productsimages', 'public');

        Product::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'count' => $request['count'],
            'description' => $request['description'],
            'category_id' => $request['category_id'],
            'image' => $path
        ]);

        return redirect()->route('adminproduct.create')->with('success', 'Product Added Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $products = Product::where('id', $id)->first();
        return view('admin.adminshowproduct', compact('products'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $products = Product::where('id' , $id)->first();
        $categories = Category::all();

        return view('admin.adminupdateproduct' , compact(['products' , 'categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $products = Product::where('id' , $id)->first();
        $products->update($request->all());
        return redirect()->route('adminproduct.index')->with('success' , 'Product Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Product::where('id', $id)->delete();
        return redirect()->back()->with('success' , 'Product Deleted Successfully');
    }
}
