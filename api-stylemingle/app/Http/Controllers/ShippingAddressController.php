<?php

namespace App\Http\Controllers;

use App\Models\ShippingAddress;
use App\Http\Requests\StoreShippingAddressRequest;
use App\Http\Requests\UpdateShippingAddressRequest;

class ShippingAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ShippingAddress::all();
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
    public function store(StoreShippingAddressRequest $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'city',
            'postal_code',
            'country',
            'state',
            'company',
        ]);
        $shippingAddress = ShippingAddress::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'postal_code' => $request->input('postal_code'),
            'country' => $request->input('country'),
            'state' => $request->input('state'),
            'company' => $request->input('company'),
        ]);

        return response()->json(['message' => 'Shipping address created successfully', 'shippingAddress' => $shippingAddress], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $shippingAddress)
    {
        return ShippingAddress::find($shippingAddress);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShippingAddress $shippingAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShippingAddressRequest $request, string $shippingAddress)
    {
        $shippingAddress = ShippingAddress::find($shippingAddress);
        $shippingAddress->update($request->all());

        return $shippingAddress;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShippingAddress $shippingAddress)
    {
        return ShippingAddress::destroy($shippingAddress);
    }
}
