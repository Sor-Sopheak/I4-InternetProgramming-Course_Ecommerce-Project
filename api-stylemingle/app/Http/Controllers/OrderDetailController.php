<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Http\Requests\StoreOrderDetailRequest;
use App\Http\Requests\UpdateOrderDetailRequest;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return OrderDetail::all();
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
    public function store(StoreOrderDetailRequest $request)
    {
        $request->validate([
            'product_detail_id' => 'required|exists:product_details,id',
            'order_id' => 'required|exists:orders,id',
            'quantity'=> 'required',
            'total_price'
        ]);

        $orderDetail = OrderDetail::create([
            'product_detail_id',
            'order_id',
            'quantity',
            'total_price',
        ]);

        return response()->json(['message' => 'Order detaail created successfully', 'orderDetail' => $orderDetail], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderDetail $orderDetail)
    {
        return OrderDetail::find($orderDetail);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderDetailRequest $request, OrderDetail $orderDetail)
    {
        $orderDetail = OrderDetail::find($orderDetail);
        $orderDetail->update($request->all());

        return $orderDetail;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderDetail $orderDetail)
    {
        return OrderDetail::destroy($orderDetail);
    }
}
