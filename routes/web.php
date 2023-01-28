<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AppController::class, 'home_game'])->name('home_game');
Route::get('/home_front', [AppController::class, 'home_front'])->name('home_front')->middleware('auth');
Route::get('/home_admin', [AppController::class, 'home_admin'])->name('home_admin');


Route::get('/memory', [GameController::class, 'memory'])->name('memory');
Route::get('/quiz', [GameController::class, 'quiz'])->name('quiz');
Route::get('/curiosity', [GameController::class, 'curiosity'])->name('curiosity');
Route::get('/animal_video', [GameController::class, 'animal_video'])->name('animal_video');


Route::get('/register', [RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store')->middleware('guest');

Route::get('/login', [SessionController::class, 'create'])->name('login')->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->name('login.store')->middleware('guest');
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');


//Route for services face to face
Route::get('/veterinario', [ServicesController::class, 'showVeterinario'])->name('showVeterinario')->middleware('auth');
Route::get('/toelettatura', [ServicesController::class, 'showToelettatura'])->name('showToelettatura')->middleware('auth');
Route::get('/dogSitter', [ServicesController::class, 'showDogSitter'])->name('showDogSitter')->middleware('auth');
Route::get('/visitaDomicilio', [ServicesController::class, 'showVisitaDomicilio'])->name('showVisitaDomicilio')->middleware('auth');


Route::get('/services', [FrontController::class, 'showServices'])->name('showServices')->middleware('auth');
Route::get('/aggiungiServizio', [FrontController::class, 'showAggiungiServizio'])->name('showAggiungiServizio')->middleware('auth');
Route::get('/showcase', [FrontController::class, 'showShowcase'])->name('showShowcase')->middleware('auth');
Route::get('/leaderboard', [FrontController::class, 'showLeaderBoard'])->name('showLeaderboard')->middleware('auth');

Route::post('/store_image',[PostController::class,'store'])->name('images.store');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::controller(TwitterController::class)->group(function(){
    Route::get('auth/twitter', 'redirectToTwitter')->name('auth.twitter');
    Route::get('auth/twitter/callback', 'handleTwitterCallback');
});

Route::get('/update_memory',[UserController::class,'updateMemory'])->name('update.memory');
Route::get('/update_quiz',[UserController::class,'updateQuiz'])->name('update.quiz');

