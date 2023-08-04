<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Product;
use Illuminate\Validation\Rules\Can;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cart::all();
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
    public function store(StoreCartRequest $request)
    {
        $request->validate([
            'user_id' => 'exists:users,id',
            'product_id' => 'exists:products,id',
            'size_id' => 'exists:sizes,id',
            'quantity',
            'price'
        ]);

        $cart = Cart::create([
            'user_id' => $request->input('user_id'),
            'product_id' => $request->input('product_id'),
            'size_id' => $request->input('size_id'),
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price')
        ]);

        return response()->json(['message' => 'Cart created successfully', 'cart' => $cart], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        return Cart::find($cart);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, string $cart)
    {
        $cart = Cart::find($cart);
        $cart->update($request->all());

        return $cart;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $cart)
    {
        return Cart::destroy($cart);
    }

    public function getProducts(string $userId)
    {
        $carts = Cart::all()->where('user_id', '=', $userId);
        foreach ($carts as $cart) {
            $product = Product::find($cart->product_id);
            $cart->product = $product;
        }
        return $carts;
    }

    public function clear(string $userId){
        $carts = Cart::all()->where('user_id', '=', $userId);
        foreach ($carts as $cart) {
            Cart::destroy($cart->id);
        }
        return 1;
    }
}
