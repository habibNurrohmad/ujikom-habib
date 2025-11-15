<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.pages.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'category' => 'required',
        'type' => 'required',
        'price' => 'required|integer',
        'stock' => 'required|integer',
        'image' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);


        $imageName = null;
        if ($request->hasFile('image')) {
        $imageName = time().'_'.$request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);
        }


        Product::create([
        'name' => $request->name,
        'category' => $request->category,
        'type' => $request->type,
        'price' => $request->price,
        'stock' => $request->stock,
        'description' => $request->description,
        'image' => $imageName
        ]);


        return redirect()->route('products.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.pages.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
        'name' => 'required',
        'category' => 'required',
        'type' => 'required',
        'price' => 'required|integer',
        'stock' => 'required|integer',
        'image' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);


        $imageName = $product->image;
        if ($request->hasFile('image')) {
        $imageName = time().'_'.$request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);
        }


        $product->update([
        'name' => $request->name,
        'category' => $request->category,
        'type' => $request->type,
        'price' => $request->price,
        'stock' => $request->stock,
        'description' => $request->description,
        'image' => $imageName
        ]);


        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}