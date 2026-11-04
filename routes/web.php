<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KorisnikController;
use App\Http\Controllers\BiljeskaController;



Route::get('/', function(){
    return redirect('/prijava');
});

Route::get('/registracija', [KorisnikController::class, 'registracija']);
Route::post('/registracija', [KorisnikController::class, 'spremiRegistraciju']);
Route::get('/prijava', [KorisnikController::class, 'prijava'])->name('login');
Route::post('/prijava', [KorisnikController::class, 'provjeriPrijavu']);
Route::get('/profil', [KorisnikController::class, 'profil'])->middleware('auth');       //stvaramo profil, ali middleware služi da profil vidi samo stvarni korisnik koji je prijavljen
Route::post('/odjava', [KorisnikController::class, 'odjava'])->middleware('auth');

Route::middleware('auth')->group(function()
{
    Route::get('/biljeske', [BiljeskaController::class, 'index']);
    Route::post('/biljeske', [BiljeskaController::class, 'store']);
    Route::put('/biljeske/{biljeska}', [BiljeskaController::class, 'update']);
    Route::delete('/biljeske/{biljeska}', [BiljeskaController::class, 'destroy']);
});