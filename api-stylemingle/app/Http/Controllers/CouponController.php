<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Http\Requests\StoreCouponRequest;
use App\Http\Requests\UpdateCouponRequest;
use PHPUnit\Framework\Constraint\Count;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Coupon::all();
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
    public function store(StoreCouponRequest $request)
    {
        $request->validate([
            'name',
            'codes' => 'required',
            'quantity',
            'remaining',
            'expires',
            'discount'
        ]);

        $coupon = Coupon::create([
            'name' => $request->input('name'),
            'codes' => $request->input('codes'),
            'quantity' => $request->input('quantity'),
            'remaining' => $request->input('remaining'),
            'expires' => $request->input('expires'),
            'discount' => $request->input('discount')
        ]);

        return response()->json(['message' => 'Coupon created successfully', 'coupon' => $coupon], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Coupon $coupon)
    {
        return Coupon::find($coupon);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coupon $coupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCouponRequest $request, Coupon $coupon)
    {
        $coupon = Coupon::find($coupon);
        $coupon->update($request->all());

        return $coupon;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coupon $coupon)
    {
        return Coupon::destroy($coupon);
    }
}
