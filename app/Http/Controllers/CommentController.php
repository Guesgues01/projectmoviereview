<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Movie;
use App\Models\Cast;
use App\Models\Castplaymovies;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function showcommetedit($id,$movieid)
    {
        $commentedit    = Comment::select("*")->where("comid", "=", $id)->get();

        $casts = Castplaymovies::leftJoin('casts', function($join) {
            $join->on('castplaymovies.castid', '=', 'casts.id');
          })->where('movieid', $movieid)->get();

        $comments = Comment::leftJoin('users', function($join) {
            $join->on('comments.created_user_id', '=', 'users.id');
          })->where('movie_id', $movieid)->orderBy('comments.comid', 'desc')->get();

        $movie      = Movie::find($movieid);

        $admin      = auth()->user();

        // return redirect('/pages/editcomment/1')->with('movie','comments','admin','commentedit');
        return view('pages.editcomment', compact('movie','comments','admin','commentedit','casts'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
       ////
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $update_comments = Comment::find($request->comid);
        // $update_comments = Comment::select("*")->where("comid", "=", $request->comid)->get();
        $update_comments->content = $request->input("your_comment");
        $update_comments->save();

        $movieid = $request->movieid;

        $admin   = auth()->user();
        $movie    = Movie::find($movieid);
        $comments = Comment::leftJoin('users', function($join) {
            $join->on('comments.created_user_id', '=', 'users.id');
          })->where('movie_id', $movieid)->get();
        return redirect('/pages/review/'.$movieid)->with('movie','comments','admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$movieid)
    {
        // echo $id;
        $Comment = Comment::where('comid',$id)->delete();
        $admin   = auth()->user();
        $movie = Movie::find($movieid);
        $comments = Comment::leftJoin('users', function($join) {
            $join->on('comments.created_user_id', '=', 'users.id');
          })->where('movie_id', $movieid)->get();
        return redirect('/pages/review/'.$movieid)->with('movie','comments','admin');
    }


}
