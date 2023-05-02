<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApiController;

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

Route::get('home',[HomeController::class,'home'])->name('home');

Route::get('search_player',[HomeController::class,'search_player'])->name('search_player');
Route::post('searchplayer-form-submit',[HomeController::class,'searchplayer_form_submit']);


Route::get('balltoballscorecard/{id}',[HomeController::class,'balltoballScorecard'])->name('balltoballScorecard');
Route::get('fullScorecard/{id}', [HomeController::class, 'fullScorecard'])->name('fullScorecard');
Route::get('fullScorecard_overbyover/{id}',[HomeController::class,'fullScorecard_overbyover'])->name('fullScorecard_overbyover');
Route::get('result', [HomeController::class, 'result'])->name('result');
Route::post('result-form-submit',[HomeController::class,'result_form_submit']);
Route::get('live_score',[ApiController::class,'live_score']);
Route::get('team-view/{id}',[HomeController::class,'team_view'])->name('team_view');
Route::get('team_result/{id}',[HomeController::class,'team_result'])->name('team_result');
Route::get('get_point_table/{id}',[ApiController::class,'get_point_table'])->name('get_point_table');
Route::get('team_schedule/{id}',[HomeController::class,'team_schedule'])->name('team_schedule');
