<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use App\Models\Backend\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $categories = Category::all();
        return view('backend.pages.category', compact('categories'));
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
    public function store(Request $request)
    {
        $validatedData = $request->validate([



            'name' => 'required',

        ]);
        $slug = $request->name;
        $data = new  Category();
        $data->name = $request->name;
        $data->slug = $slug;
        $data->save();
        return redirect()->back()->with('success', 'category added sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
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
    public function update( Request $request, $id)

    {
        $slug = $request->name;
        $tag = Category::find($id);

        $tag->name = $request->name;
         $tag->slug = $slug;
        $tag->save();
        return redirect()->back()->with('success', 'categories updates sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
