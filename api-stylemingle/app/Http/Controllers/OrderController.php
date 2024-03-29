<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Order::all();
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
    public function store(StoreOrderRequest $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'payment_id' => 'exists:payments,id',
            'coupon_id' => 'exists:coupon,id',
            'shipping_address_id' => 'exists:shipping_address,id',
            'total_price',
            'tax',
            'price_to_pay',
            'paid_date'
        ]);

        return Order::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return Order::find($order);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order = Order::find($order);
        $order->update($request->all());

        return $order;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        return Order::destroy($order);
    }
}
