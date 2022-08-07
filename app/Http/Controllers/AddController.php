<?php

namespace App\Http\Controllers;


use App\Models\Movie;
use App\Models\Cast;
use App\Models\Castplaymovies;
use Illuminate\Http\Request;


class AddController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('pages.indexmovies', compact('movies'));
    }

    public function fromadd(){
        return view('pages.add');
    }

    public function create(Request $request){

        $this->validate($request,[
            'title' => 'required', 
            'type' => 'required', 
            'name1' => 'required', 
            'description' => 'required', 
        ]);
        //upload file image to storage/app/public/images
        $image          = $request->file('image')->getClientOriginalName();
        $pathimage      = $request->file('image')->store('public/images');
        
        //เพิ่มขอ้มูลหนัง
        $new_movie = new Movie;
            $new_movie->title       = $request->title;
            $new_movie->description = $request->description;
            $new_movie->rating      = $request->rating;
            $new_movie->type        = $request->type;
            $new_movie->image       = $pathimage;
            $new_movie->save();
        
        //เพิ่มข้อมูลนักแสดง
        $cast1 =  $this->insertCasts($request->name1);
        $cast2 =  $this->insertCasts($request->name2);
        $cast3 =  $this->insertCasts($request->name3);
        $cast4 =  $this->insertCasts($request->name4);

        //เพิ่มข้อมูลนักแสดงว่าเล่นหนังเรื่องไหน
        $Castplaymovie1 = $this->insertCastplaymovies($cast1, $new_movie->id);
        $Castplaymovie2 = $this->insertCastplaymovies($cast2, $new_movie->id);
        $Castplaymovie3 = $this->insertCastplaymovies($cast3, $new_movie->id);
        $Castplaymovie4 = $this->insertCastplaymovies($cast4, $new_movie->id);

       
        $movies = Movie::all();
        return redirect('/indexmovies')->with('movies');
    }


    public function insertCasts($name){
        if ($name != '') {
           $find_Cast = Cast::select("*")->where("name", "=", $name)->get();
            if (count($find_Cast) == 0) {
                $new_Cast = new Cast;
                    $new_Cast->name = $name;
                    $new_Cast->save();

                    return $new_Cast->id;
            }else{
                return $find_Cast[0]->id;
            }
        }else{
            return "";
        }
        


    }

    public function insertCastplaymovies($castid, $movieid){
        if ($castid != '') {
            $Castplaymovies = new Castplaymovies;
                $Castplaymovies->castid = $castid;
                $Castplaymovies->movieid = $movieid;
                $Castplaymovies->save();
        }
    }

    public function destroy($id)
    {
        //ลบข้อมูลนักแสดงที่เล่นหนังเรื่องที่ต้องการลบออก
        $Castplaymovies = Castplaymovies::where('movieid',$id)->delete();

        //ลบข้อมูลหนัง
        $delete_movies = Movie::destroy($id);
        $movies = Movie::all();

        return redirect('/indexmovies')->with('movies');
    }


}