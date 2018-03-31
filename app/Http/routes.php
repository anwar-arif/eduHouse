<?php

use App\User ;
use App\Post ;
use App\Comment ;
use App\Tags;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::auth();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post' , 'PostController@postForm' ) ;
Route::get('/home' , 'PostController@show') ;
Route::post('/home' , 'PostController@store') ;
Route::get('/posts/{tag}' , 'PostController@PostByTag') ;

Route::post('/addComment' , 'CommentController@addComment') ;

Route::post('/UploadImage' , 'UserController@UploadImage') ;
Route::get('/profile' , 'UserController@showProfile') ;

Route::get('/series' , 'SeriesController@showSeries') ;
Route::post('/addSeries' , 'SeriesController@addSeries') ;
Route::get('/create/series' , 'SeriesController@createSeries' ) ;

Route::get('/changeImage' , function(){
    return view('test') ;
});
//
//Route::get('/getMypost',function(){
//    $posts = Post::all();
//    foreach ($posts as $post ) {
//        return $post->post_content ;
//    }
//});

//Route::get('/test' , function(){
//    echo "Test called" ;
//    return ;
//});

//Route::get('/insert/{name}' , function($name){
//    $tag = new Tags ;
//    $tag->tag_name = $name ;
//    $tag->save() ;
//    return back() ;
//});