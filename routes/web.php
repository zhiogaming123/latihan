<?php

use Illuminate\Support\Facades\Route;
use App\Models\Destination;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AttractionController;

Route::get('/', function () {
    $destinations = Destination::all();
    return view('pages.menu.home', compact('destinations'));
});

Route::get('/halo', function () {
    $name = "zhio";
    $hobis = ["Futsal", "badminton","coding"];
    return view('halo', compact('name', 'hobis'));
});

Route::get('/switch', function () {
    $role = "gamers";
    return view('switch', compact('role'));
});

Route::get('/about', function () {
    return view('pages.menu.about');
});


// Route::get("/destinations", function(){

// $destinations = Destination::all();
// return view ('pages.indexDestinasi', compact('destinations'));
// });

// Route::get("/detaildestinasii/{id}", function($id){

// $destinations = Destination::find($id);
// return view ('pages.detaildestinasii', compact('destinations'));
// });

Route::prefix('destinations')->name('destinations.')->group(function(){
Route::get("/",[DestinationController::class, 'index']);
Route::get("/{id}/show", [DestinationController::class, 'show'])->name('show');
Route::get("/create", [DestinationController::class, 'create'])->name('create');
Route::post("/", [DestinationController::class, 'store' ])->name('store');
Route::delete('/{id}', [DestinationController::class, 'delete'])->name('delete');
Route::get('/{id}/edit', [DestinationController::class, 'edit'])->name('edit');
Route::put('/{id}', [DestinationController::class, 'update'])->name('update');
});

Route::prefix('users')->name('user.')->group(function(){

    Route::get("/", [UserController::class, 'index'])->name('index');
    Route::get("/create", [UserController::class, 'create'])->name('create');
    Route::post("/", [UserController::class, 'store'])->name('store');

    Route::get("/{id}/show", [UserController::class, 'show'])->name('show');
    Route::get("/{id}/edit", [UserController::class, 'edit'])->name('edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('update');
    Route::delete("/{id}", [UserController::class, 'delete'])->name('delete');

});

Route::prefix('attraction')->name('attraction.')->group(function(){
Route::get("/",[attractionController::class, 'index'])->name('index');
Route::get("/create", [attractionController::class, 'create'])->name('create');
Route::post("/store", [attractionController::class, 'store' ])->name('store');
Route::get('/{id}/edit', [attractionController::class, 'edit'])->name('edit');
Route::put('/{id}/update', [attractionController::class, 'update'])->name('update');
Route::delete('/attraction/{id}/', [attractionController::class, 'delete'])->name('delete');
Route::get("/{id}/show", [attractionController::class, 'show'])->name('show');
});


Route::get('/packages', function () {
    return view('pages.menu.packages');
});

Route::get('/hotels', function () {
    return view('pages.menu.hotels');
});

Route::get('/about', function () {
    return view('pages.menu.about');
});

