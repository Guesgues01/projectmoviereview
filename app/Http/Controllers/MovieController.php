<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Comment;
use App\Models\Cast;
use App\Models\Castplaymovies;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::orderBy('id', 'DESC')->get();
        return view('pages.homepage', compact('movies'));
    }

    public function showmoivebytype($type)
    {
        // $movies = Movie::all();
        $typeshow = $type;
        $movies = Movie::select("*")->where("type", "=", $type)->get();
        return view('pages.movietype', compact('movies','typeshow'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required', 
            'image' => 'required', 
            'rating_star' => 'required', 
            'description' => 'required'
        ]);

        $movie = Movie::create($request->all());

        return redirect()->route('pages.review', $movie->id) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        if (auth()->user()) {
            $admin   = auth()->user() ;
            // echo $admin;
        }else{
            $admin   = '';
        }
       
        
        $movie = Movie::find($id);

        $casts = Castplaymovies::leftJoin('casts', function($join) {
            $join->on('castplaymovies.castid', '=', 'casts.id');
          })->where('movieid', $id)->get();
        // echo($casts) ;
        $comments = Comment::leftJoin('users', function($join) {
            $join->on('comments.created_user_id', '=', 'users.id');
          })->where('movie_id', $id)->orderBy('comments.comid', 'desc')->get();
     
        // $comments = Comment::where('movie_id', $id)->get();

        //echo($comment) ;
        return view('pages.review', compact('movie','comments','admin','casts'));
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }

    public function postcomment(int $id, Request $request)
    {
        $user_id = auth()->user()->id ;
        $admin   = auth()->user();
        $new_comments = new Comment;
                $new_comments->content = $request->input("your_comment");
                $new_comments->created_user_id = $user_id ;
				
				$new_comments->movie_id = $id;
				$new_comments->save();
        
        $casts = Castplaymovies::leftJoin('casts', function($join) {
            $join->on('castplaymovies.castid', '=', 'casts.id');
          })->where('movieid', $id)->get();
        
        $comments = Comment::leftJoin('users', function($join) {
            $join->on('comments.created_user_id', '=', 'users.id');
          })->where('movie_id', $id)->orderBy('comments.comid', 'desc')->get();
          //echo($a) ;
        $movie = Movie::find($id);
        // echo($movie) ;
        // $comments = Comment::where('movie_id', $id)->get();

        // echo($comment) ;
        return redirect('/pages/review/'.$id)->with('movie','comments','admin','casts');
    }
}
