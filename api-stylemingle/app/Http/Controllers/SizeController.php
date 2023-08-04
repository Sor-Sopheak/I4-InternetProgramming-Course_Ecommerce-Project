<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Http\Requests\StoreSizeRequest;
use App\Http\Requests\UpdateSizeRequest;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Size::all();
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
    public function store(StoreSizeRequest $request)
    {
        $request->validate([
            'size' => 'required',
        ]);
        return Size::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Size $size)
    {
        return Size::find($size);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Size $size)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSizeRequest $request, Size $size)
    {
        $size = Size::find($size);
        $size->update($request->all());

        return $size;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Size $size)
    {
        return Size::destroy($size);
    }

    public function search($name) {
        return Size::where('size', 'like', '%'.$name.'%')->get();
    }
}
