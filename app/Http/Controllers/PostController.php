<?php

namespace App\Http\Controllers;

use App\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Post ;
use App\Comment ;
use App\User ;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function GetAllPost($result) {
        $posts = array(null) ;
        $post_size = 0 ;
        $content = '';
        foreach ($result as $res ) {
            $post_id = $res->post_id;

            $comments = Comment::where('post_id' , $post_id )->get() ;
            $comment_array = array(null) ;
            $size = 0 ;
            if (count($comments) > 0 ) {
                foreach ($comments as $com ) {
                    $user_id = $com->user_id ;
                    $name = User::find($user_id )->name;
                    $user_name = User::find($user_id )->user_name;
                    $profile_pic_path = User::find($user_id)->profile_pic_path;
                    $created_at = $com->created_at;
                    $comment_desc = $com->comment_desc;
                    $comment_array[$size++] = array(
                        "name" => $name ,
                        "user_name" => $user_name ,
                        "profile_pic_path" => $profile_pic_path ,
                        "created_at" => $created_at ,
                        "comment_desc" => $comment_desc
                    ) ;
                }
            }
            $user_id = $res->user_id ;
            $name = User::find( $user_id )->name ;
            $user_name = User::find($user_id)->user_name ;
            $profile_pic = User::find( $user_id )->profile_pic_path ;
            $created_at = $res->created_at ;
            $post_title = $res->post_title ;
            $post_tag = $res->post_tag ;
            $post_content = $res->post_content ;
            $content = $post_content ;
            $like_count = $res->like_count ;
            $posts[$post_size++] = array(
                "post_id" => $post_id ,
                "name" => $name ,
                "user_name" => $user_name ,
                "profile_pic_path" => $profile_pic ,
                "created_at" => $created_at ,
                "post_title" => $post_title ,
                "post_tag" => $post_tag ,
                "post_content" => $post_content ,
                "like_count" => $like_count ,
                "comments" =>$comment_array ) ;
        }
        return $posts ;
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->post_title = $request->get('title') ;
        $post->post_tag = $request->get('tag') ;
        $post->post_content = $request->get('content') ;
        $post->user_id = Auth::user()->user_id ;
        $post->like_count = 0 ;
        $post->comment_count = 0 ;
        $post->series_id = 0 ;
        $post->save() ;

        $result = Post::all() ;
        
        $posts = $this->GetAllPost($result) ;
        $tags = array() ;
        $tag_size = 0 ;
        $allTag = Tags::all() ;
        foreach ($allTag as $tag ) {
            $tags[$tag_size++] = array(
                "tag_name" => $tag->tag_name ,
                "tag_id" => $tag->tag_id ,
            );
        }
        return view('post_template' , compact('posts' , 'tags')) ;
    }

    public function show()
    {

        $result = Post::all() ;
        $posts = $this->GetAllPost($result) ;
        $tags = array() ;
        $tag_size = 0 ;
        $allTag = Tags::all() ;
        foreach ($allTag as $tag ) {
            $tags[$tag_size++] = array(
                "tag_name" => $tag->tag_name ,
                "tag_id" => $tag->id ,
            );
        }
        return view('post_template' , compact('posts' , 'tags') ) ;
    }

    public function PostByTag($tag) {
//        return "tag is ".$tag ;
        $result = Post::where('post_tag' , $tag )->get()->all() ;
        $posts = $this->GetAllPost($result) ;
        $tags = array() ;
        $tag_size = 0 ;
        $allTag = Tags::all() ;
        foreach ($allTag as $tag ) {
            $tags[$tag_size++] = array(
                "tag_name" => $tag->tag_name ,
                "tag_id" => $tag->id ,
            );
        }
        return view('post_template' , compact('posts' , 'tags') ) ;
    }

    public function postForm() {
        $tags = Tags::all();
        return view('post' , compact('tags')) ;
    }
}
