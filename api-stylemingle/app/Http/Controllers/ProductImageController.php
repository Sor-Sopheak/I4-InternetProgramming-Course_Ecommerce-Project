<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use App\Http\Requests\StoreProductImageRequest;
use App\Http\Requests\UpdateProductImageRequest;
use App\Models\Product;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProductImage::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductImageRequest $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = '';
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $filename);
            $imagePath = '/storage/images/' . $filename;
        }

        $productImage = ProductImage::create([
            'product_id' => $request->input('product_id'),
            'image' => $imagePath,
        ]);

        return response()->json(['message' => 'Product Image created successfully', 'product_image' => $productImage], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductImage $productImage)
    {
        return ProductImage::find($productImage);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductImage $productImage)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductImageRequest $request, ProductImage $productImage)
    {
        $productImage = ProductImage::find($productImage);
        $productImage->update($request->all());

        return $productImage;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductImage $productImage)
    {
        return ProductImage::destroy($productImage);
    }
}
