<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Content;
use App\Http\Controllers\ContentController;

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
Route::get('/about-us', function () {
    return 'This page is about us';
});
//view
//geet text mee door een variabele te maken
//zet de variabele in een array
Route::get('/contactpagina/{name}', function ($name) {
    $contact = 'Dit is de contactpagina, bereik ons op: xxx';
    //$name = 'John Doe';
    //compact zodat je de variabele kan gebruiken in de view
    return view('contactpagina', ['contact' => $contact], compact(var_name: 'name'));
})->name('contactpagina');

//controller
Route::get('blogs', [\App\Http\Controllers\BlogController::class, 'index'])
    ->name('blogs');
//->middleware ('auth'); indienen ingelogd te zijn om de pagina te zien

//2
Route::get('/homepage', function () {
    return view('homepage');
});
//3
Route::get('/contact', function () {
    return view('contact');
});
//4
Route::get('/about', function () {
    return view('about');
});

//route controllers
Route::get('homepage', [\App\Http\Controllers\HomepageController::class, 'homepage'])->name('homepage');
Route::get('contact', [\App\Http\Controllers\HomepageController::class, 'contact'])->name('contact');
Route::get('about', [\App\Http\Controllers\HomepageController::class, 'about'])->name('about');

//crud
Route::resource('contents', ContentController::class);

//Route::get('/contents/create', [ContentController::class, 'create'])->name('contents.create');
//Route::post('/contents.show', [ContentController::class, 'store'])->name('contents.store');
//Route::get('/contents.show', [ContentController::class, 'contents.show'])->name('contents.show');
//Route::get('/contents.index', [ContentController::class, 'contents.index'])->name('contents.index');

//Auth
Route::get('/register', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'create']);
Route::post('/register', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'store']);
require __DIR__ . '/auth.php';



