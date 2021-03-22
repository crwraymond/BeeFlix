<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class movieController extends Controller
{
    public function welcome()
    {
        $genre=Genre::all();
        return view('welcome', ['genres'=>$genre]);
    }

    public function detail($id)
    {
        $movie = DB::table('movies')->find($id);
        $genre = DB::table('genres')->where('id', $movie->genre_id)->first();
        $episode = DB::table('episodes')->where('movie_id', $movie->id)->paginate(3);
        return view('detail', ['movie'=>$movie, 'genre'=>$genre, 'episode'=>$episode]);
    }

    public function detailgenre($name)
    {
        $genre = DB::table('genres')->where('name', $name)->first();
        $movie = DB::table('movies')->where('genre_id', $genre->id)->get();
        return view('detailGenre', ['movie'=>$movie, 'genre'=>$genre]);
    }
    
    
}
