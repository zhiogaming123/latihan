<?php

use Illuminate\Support\Facades\Route;
use App\Models\Destination;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    $destinations = Destination::all();
    return view('pages.home', compact('destinations'));
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
    return view('pages.about');
});


// Route::get("/destinations", function(){

// $destinations = Destination::all();
// return view ('pages.indexDestinasi', compact('destinations'));
// });

// Route::get("/detaildestinasii/{id}", function($id){

// $destinations = Destination::find($id);
// return view ('pages.detaildestinasii', compact('destinations'));
// });

Route::get(
    "/destinations",
    [DestinationController::class, 'index']
);

Route::get("/detaildestinasi/{id}", [DestinationController::class, 'show'])->name('detaildestinasi.show');

Route::get("/destinations/create", [DestinationController::class, 'create']);
Route::post("/destinations", [DestinationController::class, 'store' ]);

Route::delete('/destination/{id}', [DestinationController::class, 'delete']);

Route::get('/destination/{id}/edit', [DestinationController::class, 'edit'])->name('destination.edit');
Route::put('/destination/{id}', [DestinationController::class, 'update'])->name('destination.update');

Route::get(
    "/users",
    [UserController::class, 'index']
);


Route::get("/users/create", [UserController::class, 'create']);
Route::post("/users", [UserController::class, 'store' ]);

Route::delete('/user/{id}', [UserController::class, 'delete']);

Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');



Route::get('/packages', function () {
    return view('pages.packages');
});

Route::get('/hotels', function () {
    return view('pages.hotels');
});

Route::get('/about', function () {
    return view('pages.about');
});