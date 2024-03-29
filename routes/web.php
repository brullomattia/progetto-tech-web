<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
Route::get('/home_admin', [AppController::class, 'home_admin'])->name('home_admin')->middleware('auth');
Route::get('/edit_user/{id}', [AppController::class, 'edit_user'])->name('edit_user')->middleware('auth');
Route::get('/gestione_account', [AppController::class, 'gestione_account'])->name('gestione_account')->middleware('auth');


Route::get('/memory', [GameController::class, 'memory'])->name('memory');
Route::get('/quiz', [GameController::class, 'quiz'])->name('quiz');
Route::get('/curiosity', [GameController::class, 'curiosity'])->name('curiosity');
Route::get('/animal_video', [GameController::class, 'animal_video'])->name('animal_video');


Route::get('/register', [RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store')->middleware('guest');

//route for creating a service
Route::get('/service', [ServiceController::class, 'create'])->name('service')->middleware('auth');
Route::post('/service', [ServiceController::class, 'store'])->name('service.store')->middleware('auth');

//route for home_admin
Route::get('/users_management', [AdminController::class, 'showUsers_management'])->name('showUsers_management')->middleware('auth');
Route::get('/services_management', [AdminController::class, 'showServices_management'])->name('showServices_management')->middleware('auth');
Route::get('/showcase_management', [AdminController::class, 'showShowcase_management'])->name('showShowcase_management')->middleware('auth');

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
Route::get('/delete/post/{id}',[PostController::class,'delete'])->name('post.delete');

Route::post('/store_service',[ServiceController::class,'store'])->name('service.store');
Route::get('/delete/service/{id}',[ServiceController::class,'delete'])->name('service.delete')->middleware('auth');;
Route::get('/approve/{id}',[ServiceController::class,'approve'])->name('service.approve');





Route::get('/delete/{id}',[UserController::class,'delete'])->name('delete.user')->middleware('auth');
Route::get('/update_memory',[UserController::class,'updateMemory'])->name('update.memory')->middleware('auth');
Route::get('/update_quiz',[UserController::class,'updateQuiz'])->name('update.quiz')->middleware('auth');
Route::post('/update/{id}',[UserController::class,'update'])->name('update')->middleware('auth');
Route::get('/update_user',[UserController::class,'updateUser'])->name('updateUser')->middleware('auth');
Route::get('/update_password',[UserController::class,'updatePassword'])->name('updatePassword')->middleware('auth');



