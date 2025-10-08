<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//route
//get haalt de pagina op
Route::get('/about-us', function() {
    return 'This page is about us';
});
//view
//geet text mee door een variabele te maken
//zet de variabele in een array
Route::get('/contactpagina/{name}', function($name) {
    $contact = 'Dit is de contactpagina, bereik ons op: xxx';
    //$name = 'John Doe';
    //compact zodat je de variabele kan gebruiken in de view
    return view('contactpagina', ['contact' => $contact], compact(var_name: 'name'));
})->name('contactpagina');

//controller
Route::get('blogs', [\App\Http\Controllers\BlogController::class, 'index']);

require __DIR__.'/auth.php';


