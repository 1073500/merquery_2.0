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
Route::get('/', function () {
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

//Auth
Route::get('/register', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'create']);
Route::post('/register', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'store']);

//Admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('admin/contents', ContentController::class);
});

Route::middleware(['web'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth']);
});


require __DIR__ . '/auth.php';



