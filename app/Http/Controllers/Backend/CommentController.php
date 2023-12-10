<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Comment;
use Illuminate\Support\Facades\Auth;
class CommentController extends Controller
{
    //
    public function store(Request $request)
    {
        if (Auth::check()) {
            // Retrieve the authenticated user's ID
            $userId = Auth::id();

            // Create a new comment
            $comment = Comment::create([
                'commentable_type' => 'App\\Models\\Post',
                'commentable_id' => $request->posts_id,
                'posts_id' => $request->posts_id,
                'parent_id' => $request->posts_id,
                'users_id' => $userId, // Use the authenticated user's ID
                'comment' => $request->comment,
            ]);

            // Your additional logic here, if needed
        } else {
            dd('here');
            return response()->json($comment);
        }


    }

    public function index($postId)
    {
        $comments = Comment::where('posts_id', $postId)->get();

        return response()->json($comments);
    }
}
