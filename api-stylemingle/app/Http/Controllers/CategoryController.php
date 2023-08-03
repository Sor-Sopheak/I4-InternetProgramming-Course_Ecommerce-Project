<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Psy\CodeCleaner\ReturnTypePass;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Category::all();
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
    public function store(StoreCategoryRequest $request)
    {
        $request->validate([
            'category_name' => 'required'
        ]);

        return $category = Category::create($request->all());

        // if(auth()->user()->hasRole('admin')) {
        //     $category = Category::create($request->all());

        //     return response()->json(['message' => 'Category created successfully', 'category' => $category], 201);
        // }else {
        //     return response()->json(['message' => 'You don not have permisstion to create this category'], 403);
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $id)
    {
        return Category::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $id)
    {
        $category = Category::find($id);
        $category->update($request->all());

        return $category;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $id)
    {
        return Category::destroy($id);
    }

    //search
    public function search($name) {
        return Category::where('category_name', 'like', '%'.$name.'%')->get();
    }
}
