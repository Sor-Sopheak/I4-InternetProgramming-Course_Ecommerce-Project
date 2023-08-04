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
            'category_name' => 'required|string|unique:categories,category_name',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $imagePath = '';
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $filename);
            $imagePath = '/storage/images/' . $filename;
        }
        $category = Category::create([
            'category_name' => $request->input('category_name'),
            'image' => $imagePath
        ]);

        return response()->json(['message' => 'Category created successfully', 'category' => $category], 201);

        // if(auth()->user()->hasRole('admin')) {
        //     $category = Category::create($request->all());

        //     return response()->json(['message' => 'Category created successfully', 'category' => $category], 201);
        // }else {
        //     return response()->json(['message' => 'You don not have permisstion to create this category'], 403);
        // }
    }

    public function show(Category $id)
    {
        return Category::find($id)->first();
    }

    public function products(Category $id)
    {
        return Category::with(['products'])->find($id)->first();
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
    public function update(UpdateCategoryRequest $request, Category $category)
    {

        $request->validate([
            'category_name' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming you want to validate the image file
        ]);

        $category->update($request->only('category_name', 'image'));

        $updatedCategory = Category::find($category->id);

        return response()->json($updatedCategory);
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
