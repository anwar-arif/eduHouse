<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Post ;
use App\Comment ;
use App\User ;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth') ;
    }

    public function addComment(Request $request ) {
        $comment = new Comment ;
        $comment->user_id = Auth::user()->user_id ;
        $comment->comment_desc = $request->comment ;
        $comment->post_id = $request->post_id ;
        $comment->save() ;

//        $post = Post::find($post_id)->comment_count ;
//        $post->comment_count += 1 ;
//        $post->save() ;

        return response()->json([
            'success'=>'Got Simple Ajax Request.' ,
            'user_name'=>Auth::user()->user_name ,
            'profile_pic_path'=>Auth::user()->profile_pic_path ,
            'created_at' => $comment->created_at ,
            'comment_desc' => $comment->comment_desc ,
        ]);
    }
}
