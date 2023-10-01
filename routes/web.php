<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeBController;
use App\Http\Controllers\ExploreController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// font end
Route::get('/',[HomeController::class, 'Home']);
Route::get('/index',[HomeController::class, 'Home']);

Route::get('/createnft',[HomeController::class, 'CeateNFT']);
Route::get('/explore',[ExploreController::class, 'Explore']);
Route::get('/details', function () {
    return view('fronts.details');
});
Route::get('/create', function () {
    return view('fronts.create');
});
Route::get('/author', function () {
    return view('fronts.author');
});


//back end
Route::get('/backs', [HomeBController::class,'HomeB']);


//crud
Route::get('/update', function () {
    return view('backs.backs_layout.crud.h_update');
});
