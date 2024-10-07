<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::view('/', 'welcome');
Route::get('/Inscription', [TraitementInscription::class, 'showInscription'])->name('inscription');
Route::get("/connection",[TraitementInscription::class,'showConnection'])->name('connection');;
Route::post("/Inscription",[TraitementInscription::class,'inscriptionPost'])->name('inscription.Post');
Route::get("/connection",[TraitementInscription::class,'connectionPost'])->name('connection.Post');
=======
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

require __DIR__.'/auth.php';
>>>>>>> origin/main
