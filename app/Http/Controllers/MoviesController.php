<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $movies = DB::table('movies')
           ->select('movies.id','genres.genre as genero','movies.nombre','movies.cast','movies.direction',
               'movies.duration')
           ->join('genres','genres.id','=','movies.generes_id')->get();
       return view('movies/index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos = Genre::all()->pluck('genre','id');
        return view('movies/create',compact('generos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movie;
        $movie->generes_id = $request->select_genero;
        $movie->nombre = $request->nombre;
        $movie->cast = $request->cast;
        $movie->direction = $request->direction;
        $movie->duration = $request->duration;
        $movie->save();

        return Redirect::to('movies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        $generos = Genre::all()->pluck('genre','id');
        return view('movies/edit',compact('generos','movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd('llego al update');
        $movie =Movie::find($id);
        $movie->generes_id = $request->select_genero;
        $movie->nombre = $request->nombre;
        $movie->cast = $request->cast;
        $movie->direction = $request->direction;
        $movie->duration = $request->duration;
        $movie->save();

        return Redirect::to('movies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie =Movie::find($id);
        $movie->delete();
        return Redirect::to('movies');
    }
}
