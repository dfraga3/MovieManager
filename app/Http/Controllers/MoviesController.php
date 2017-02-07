<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Http\Requests\MovieRequest;
use Illuminate\Http\Request;

class MoviesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['home','index']);
    }


    /**
     * Present a form to allow user to enter a new movie.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view("movies.create");
    }


    public function delete($id)
    {
        $movie = Movie::findOrFail($id);
        return view("movies.show", compact("movie"));
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete($id);
        session()->flash('flash_message', $movie->title . ' has been deleted.');
        return redirect('movies');
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view("movies.edit", compact("movie"));
    }


    /**
     * Show all movies
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $sortOptions = ['Title','Year','Length','Format','Rating'];
        $selectedSort = strtolower($request->input('sortBy', 'title'));
        $selectedDir = strtolower($request->input('sortDir', 'ASC'));
        $movies = Movie::orderby($selectedSort, $selectedDir)->get();
        return view('movies.index', compact('movies', 'sortOptions', 'selectedSort', 'selectedDir'));
    }


    /**
     * Show a details of a specific movie
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view("movies.edit", compact("movie"));
    }

    /**
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(MovieRequest $request)
    {
        Movie::create($request->all());
        session()->flash('flash_message', 'Your movie has been added.');
        return redirect('movies');
    }

    public function update($id, MovieRequest $request)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        session()->flash('flash_message', 'Your movie has been updated.');
        return redirect('movies');
    }


}
