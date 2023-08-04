<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use App\Http\Requests\StoreProductDetailRequest;
use App\Http\Requests\UpdateProductDetailRequest;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProductDetail::all();
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
    public function store(StoreProductDetailRequest $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'product_image_id' => 'required|exists:product_images,id',
            'size_id' => 'required|exists:sizes,id',
            'color_id' => 'required|exists:colors,id'
        ]);

        return ProductDetail::create([
            'product_id' => $request->input('product_id'),
            'product_image_id' => $request->input('product_image_id'),
            'size_id' => $request->input('size_id'),
            'color_id' => $request->input('color_id'),

            response()->json(['message' => 'Product detail created successfully', 'category'], 201)
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(ProductDetail $productDetail)
    {
        return ProductDetail::find($productDetail);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductDetail $productDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductDetailRequest $request, ProductDetail $productDetail)
    {
        $productDetail = ProductDetail::find($productDetail);
        $productDetail->update($request->all());

        return $productDetail;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductDetail $productDetail)
    {
        return ProductDetail::destroy($productDetail);
    }

    
}
