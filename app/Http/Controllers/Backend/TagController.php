<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Backend\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $tags = Tag::all();
        return view('backend.pages.tag', compact('tags'));
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
        // dd($request->all());
        $slug = $request->name;
        $data = new  Tag();
        $data->name = $request->name;
        $data->slug = $slug;
        $data->save();
        return redirect()->back()->with('success', 'tags added sucessfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $slug = $request->name;
        $tag = Tag::find($id);

        $tag->name = $request->name;
         $tag->slug = $slug;
        $tag->save();
        return redirect()->back()->with('success', 'tags updates sucessfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
