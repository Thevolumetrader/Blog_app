<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use App\Models\Backend\Post;
use App\Models\Backend\Category;
use App\Models\Backend\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.pages.post', compact('tags', 'categories','posts') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function singleBlog($id)
    {
        Post::find($id)->increment('count');
       $post =  Post::find($id);

         return view('frontend.pages.singleBlog', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());
        // $validatedData = $request->validate([



        //     'title' => 'required',
        //     'content ' => 'required',
        //     'categories_id' => 'required',

        //     'tags_id' => 'required',

        // ]);
        $slug = $request->title;
        $post= new  Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->categories_id = $request->categories_id;
        $post->users_id = auth()->user()->id;
        $post->slug = $slug;


        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/post'), $filename);
            $post['image'] = $filename;
        }



        $post->tags()->sync($request->name);

        $post->save();

        return redirect()->back()->with('success', 'posts added sucessfully');



    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        // dd($request->all());
        $post = Post::find($id);
        // $validatedData = $request->validate([
        //            'name' => 'required',

        //        ]);


        $post->title = $request->title;
        $post->content = $request->content;
        $post->categories_id = $request->categories_id;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/post'), $filename);
            $post['image'] = $filename;
        }
         $post->save();

               return redirect()->back()->with('success','post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
