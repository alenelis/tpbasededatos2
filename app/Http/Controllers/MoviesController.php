<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
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

    public function index()
    {
          $movies = Movie::all();
        dd("a$movies");
        //return view('movies.index', compact('movies'));
        return view('movies.index');
    }

    public function create()
    {
        return view('movies.index');
    }
}
