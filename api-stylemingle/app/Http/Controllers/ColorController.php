<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Http\Requests\StoreColorRequest;
use App\Http\Requests\UpdateColorRequest;
use Database\Seeders\ColorSeeder;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Color::all();
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
    public function store(StoreColorRequest $request)
    {
        $fields = $request->validate([
            'color' => 'required|string|unique:colors,color',
            'color_code' => 'required|string|unique:colors,color_code'
        ]);

        Color::create([
            'color' => $fields['color'],
            'color_code' => $fields['color_code']
        ]);
        return response()->json(['message' => 'Color created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Color $color)
    {
        return Color::find($color);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Color $color)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateColorRequest $request, Color $color)
    {
        $color = Color::find($color);
        $color->update($request->all());

        return $color;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Color $color)
    {
        return Color::destroy($color);
    }

    public function searchName($name) {
        return Color::where('color', 'like', '%'.$name.'%')->get();
    }

    public function searchCode($code) {
        return Color::where('color_code', 'like', '%'.$code.'%')->get();
    }
}
