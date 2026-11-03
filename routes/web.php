<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KorisnikController;

Route::get('/', function(){
    return redirect('/prijava');
});

Route::get('/registracija', [KorisnikController::class, 'registracija']);
Route::post('/registracija', [KorisnikController::class, 'spremiRegistraciju']);
Route::get('/prijava', [KorisnikController::class, 'prijava'])->name('login');
Route::post('/prijava', [KorisikController::class, 'provjeriPrijavu']);
Route::get('/profil', [KorisnikController::class, 'profil'])->middleware('auth');       //stvaramo profil, ali middleware služi da profil vidi samo stvarni korisnik koji je prijavljen
Route::post('/odjava', [KorisnikController::class, 'odjava'])->middleware('auth');