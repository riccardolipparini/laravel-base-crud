<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class HomeController extends Controller
{
    public function home(){

        $movies = Movie::all();



        return view('pages.home', compact('movies'));

    }

    public function details($id){

        $movie = Movie::findOrFail($id);

        

        return view('pages.details', compact('movie'));
    }
}
