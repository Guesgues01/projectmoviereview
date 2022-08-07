<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AddController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MovieController::class, 'index'])
    ->name('pages.homepage');

  
// route แสดงหน้าว่าดาราคนนี้เล่นหนังเรื่องไหนบ้าง
Route::get('/cast/{id}', [CastController::class, 'show'])
    ->name('pages.cast');

Route::get('/movie', function () {
    return view('pages.movie');
});  

Route::get('/serie', function () {
    return view('pages.serie');
});



Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/pages/review/{id}', [MovieController::class, 'show'])
    ->name('pages.review');
//แสดงรายการหนังตามประเภท
Route::get('/pages/movietype/{type}', [MovieController::class, 'showmoivebytype'])
    ->name('pages.movietype');

Route::post('/pages/review/{id}', [MovieController::class, 'postcomment'])
    ->name('pages.review1');

Route::get('/reviewserie', function () {
    return view('pages.reviewserie');
});

// route ลบ comment
Route::get('deletecomment/{id}/{movieid}', [CommentController::class, 'destroy']);
// route แสดงหน้าแก้ไขcomment
Route::get('/showcommetedit/{id}/{movieid}', [CommentController::class, 'showcommetedit'])
    ->name('pages.editcomment');
// route แก้ไข comment
Route::post('/update',[CommentController::class, 'update']);

// เรียกหน้ารายการข้อมูลหนัง
Route::get('/indexmovies', [AddController::class, 'index'])
    ->name('pages.indexmovies');
// เรียกหน้าเพิ่มข้อมูลหนัง
Route::get('/add ', [AddController::class, 'fromadd'])
    ->name('pages.add');
//เพิ่มข้อมูลหนัง
Route::post('/create',[AddController::class, 'create']);
//ลบข้อมูลหนัง
Route::get('deletemovie/{id}',[AddController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('add')->middleware('admin');

//Route::resource('/', MovieController::class);
//Route::resource('/pages/review', MovieController::class);


//Route::resource('/home', MovieController::class);


//Route::resource('/pages', CastController::class);
Route::resource('movies.comments', CommentController::class);

Route::post('/movies/{movie:id}/cast_store')->name('movie_cast_store');
Route::delete('/movies/{movie:id}/casts/{cast:id}')->name('movie_cast_destroy');
