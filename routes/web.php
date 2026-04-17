<?php

use Illuminate\Support\Facades\Route;
use App\Models\Destination;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\PaulingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    $destinations = Destination::all();
    return view('pages.menu.home', compact('destinations'));
});

/*
|--------------------------------------------------------------------------
| TEST ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/halo', function () {
    $name = "zhio";
    $hobis = ["Futsal", "badminton","coding"];
    return view('halo', compact('name', 'hobis'));
});

Route::get('/switch', function () {
    $role = "gamers";
    return view('switch', compact('role'));
});

/*
|--------------------------------------------------------------------------
| STATIC PAGES
|--------------------------------------------------------------------------
*/
Route::get('/about', function () {
    return view('pages.menu.about');
});

Route::get('/packages', function () {
    return view('pages.menu.packages');
});

Route::get('/hotels', function () {
    return view('pages.menu.hotels');
});

/*
|--------------------------------------------------------------------------
| DESTINATIONS
|--------------------------------------------------------------------------
*/
Route::prefix('destinations')->name('destinations.')->group(function(){
    Route::get("/",[DestinationController::class, 'index']);
    Route::get("/{id}/show", [DestinationController::class, 'show'])->name('show');
    Route::get("/create", [DestinationController::class, 'create'])->name('create');
    Route::post("/", [DestinationController::class, 'store'])->name('store');
    Route::delete('/{id}', [DestinationController::class, 'delete'])->name('delete');
    Route::get('/{id}/edit', [DestinationController::class, 'edit'])->name('edit');
    Route::put('/{id}', [DestinationController::class, 'update'])->name('update');
});

/*
|--------------------------------------------------------------------------
| USERS
|--------------------------------------------------------------------------
*/
Route::prefix('users')->name('user.')->group(function(){
    Route::get("/", [UserController::class, 'index'])->name('index');
    Route::get("/create", [UserController::class, 'create'])->name('create');
    Route::post("/", [UserController::class, 'store'])->name('store');
    Route::get("/{id}/show", [UserController::class, 'show'])->name('show');
    Route::get("/{id}/edit", [UserController::class, 'edit'])->name('edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('update');
    Route::delete("/{id}", [UserController::class, 'delete'])->name('delete');
});

/*
|--------------------------------------------------------------------------
| ATTRACTION
|--------------------------------------------------------------------------
*/
Route::prefix('attraction')->name('attraction.')->group(function(){
    Route::get("/",[AttractionController::class, 'index'])->name('index');
    Route::get("/create", [AttractionController::class, 'create'])->name('create');
    Route::post("/store", [AttractionController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [AttractionController::class, 'edit'])->name('edit');
    Route::put('/{id}/update', [AttractionController::class, 'update'])->name('update');
    Route::delete('/attraction/{id}', [AttractionController::class, 'delete'])->name('delete');
    Route::get("/{id}/show", [AttractionController::class, 'show'])->name('show');
});

/*
|--------------------------------------------------------------------------
| PAULING
|--------------------------------------------------------------------------
*/
Route::prefix('pauling')->name('pauling.')->group(function(){
    Route::get("/",[PaulingController::class, 'index'])->name('index');
    Route::get("/create", [PaulingController::class, 'create'])->name('create');
    Route::post("/store", [PaulingController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [PaulingController::class, 'edit'])->name('edit');
    Route::put('/{id}/update', [PaulingController::class, 'update'])->name('update');
    Route::delete('/pauling/{id}', [PaulingController::class, 'delete'])->name('delete');
    Route::get("/{id}/show", [PaulingController::class, 'show'])->name('show');
});

/*
|--------------------------------------------------------------------------
| REVIEW
|--------------------------------------------------------------------------
*/
Route::prefix('review')->name('review.')->group(function(){
    Route::get("/",[ReviewController::class, 'index'])->name('index');
    Route::get("/create", [ReviewController::class, 'create'])->name('create');
    Route::post("/store", [ReviewController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [ReviewController::class, 'edit'])->name('edit');
    Route::put('/{id}/update', [ReviewController::class, 'update'])->name('update');
    Route::delete('/{id}', [ReviewController::class, 'delete'])->name('delete');
    Route::get("/{id}/show", [ReviewController::class, 'show'])->name('show');
});

/*
|--------------------------------------------------------------------------
| AUTH (LOGIN / REGISTER)
|--------------------------------------------------------------------------
*/
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);


Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', [AuthController::class, 'login']);