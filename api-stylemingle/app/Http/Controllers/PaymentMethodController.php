<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use App\Http\Requests\StorePaymentMethodRequest;
use App\Http\Requests\UpdatePaymentMethodRequest;
use App\Models\Category;
use App\Models\Product;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PaymentMethod::all();
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
    public function store(StorePaymentMethodRequest $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $paymentMethod = PaymentMethod::create([
            'name' => $request->input('name')
        ]);

        return response()->json(['message' => 'Payment method created successfully', 'paymentMethod' => $paymentMethod], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(PaymentMethod $paymentMethod)
    {
        return Category::find($paymentMethod);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentMethodRequest $request, PaymentMethod $paymentMethod)
    {
        $paymentMethod = Product::find($paymentMethod);
        $paymentMethod->update($request->all());

        return $paymentMethod;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentMethod $paymentMethod)
    {
        return PaymentMethod::destroy($paymentMethod);
    }

    public function search($name) {
        return PaymentMethod::where('type', 'like', '%'.$name.'%')->get();
    }
}
