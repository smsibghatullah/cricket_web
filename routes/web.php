<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('home',[HomeController::class,'home']);

Route::get('search_player',[HomeController::class,'search_player']);
Route::post('searchplayer-form-submit',[HomeController::class,'searchplayer_form_submit']);


Route::get('fullScorecard/{id}',[HomeController::class,'fullScorecard']);
