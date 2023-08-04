<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function type(string $type)
    {
        return Product::where('product_type', 'like', $type)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'product_name' => 'required|string|unique:products,product_name',
            'product_type' => 'string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required',
            'description'
        ]);

        $imagePath = '';
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $filename);
            $imagePath = '/storage/images/' . $filename;
        }

        $product = Product::create([
            'product_name' => $request->input('product_name'),
            'product_type' => $request->input('product_type'),
            'image' => $imagePath,
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
            'description' => $request->input('description')
        ]);

        return response()->json(['message' => 'Product created successfully', 'category' => $product], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Product::with(['product_images'])->where('id', '=', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        // $product = Product::find($id);

        $product->update($request->all());

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Product::destroy($id);
    }

    /**
     * Search for name
     */
    public function search($name) {
        return Product::where('product_name', 'like', '%'.$name.'%')->get();
    }
}
