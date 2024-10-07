<?php
use App\Http\Controllers\TraitementInscription;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::get('/Inscription', [TraitementInscription::class, 'showInscription'])->name('inscription');
Route::get("/connection",[TraitementInscription::class,'showConnection'])->name('connection');;
Route::post("/Inscription",[TraitementInscription::class,'inscriptionPost'])->name('inscription.Post');
Route::get("/connection",[TraitementInscription::class,'connectionPost'])->name('connection.Post');
