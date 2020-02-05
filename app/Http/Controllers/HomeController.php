<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Actor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $movies=Movie::all();

        return view('home',compact('movies'));
    }

    Public function singleMovie(){
        $movies=Movie::all();
        // $actors = Movie::find(5)->actors()->get();
        return view('movie_list.single_movie',compact('movies'));
    }

    Public function singleActor(){
        $actors=Actor::all();
        return view('movie_list.single_actor',compact('actors'));
    }

}
