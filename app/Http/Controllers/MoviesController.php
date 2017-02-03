<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Http\Requests\MovieRequest;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    /**
     * Show all movies
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $movies = Movie::get();

        return view('movies.index', compact('movies'));
    }

    /**
     * Show a details of a specific movie
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $movie = Movie::findOrFail($id);

        return view("movies.show", compact("movie"));
    }

    /**
     * Present a form to allow user to enter a new movie.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view("movies.create");
    }

    /**
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(MovieRequest $request)
    {
        Movie::create($request->all());
        return redirect('movies');
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view("movies.edit", compact("movie"));
    }

    public function update($id, MovieRequest $request)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        return redirect('movies');
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect('movies');
    }
}
