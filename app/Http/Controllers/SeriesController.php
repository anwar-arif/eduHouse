<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Series;
use App\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Post ;
use App\Comment ;
use App\User ;

class SeriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showSeries() {
        $series = Series::all() ;
        return view('series' , compact('series')) ;
    }
    
    public function createSeries() {
        $tags = Tags::all();
        return view('create_series' , compact('tags')) ;
    }
    
    public function addSeries(Request $request ) {
        return back() ;
    }
}
