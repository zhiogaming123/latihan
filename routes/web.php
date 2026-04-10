<?php

use Illuminate\Support\Facades\Route;
use App\Models\Destination;
use App\Http\Controllers\DestinationController;

Route::get('/', function () {
    return view('pages.home');
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

