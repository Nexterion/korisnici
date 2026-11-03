<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class KorisnikController extends Controller
{
    public function registracija()
    {
        return view('registracija');
    }

    public function spremiRegistraciju(Request $request)
    {
        $podaci=$request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8|confirmed'
        ]);

        User::create([
            'name'=>$podaci['name'],
            'email'=>$podaci['email'],
            'password'=>Hash::make($podaci['password'])
        ]);
        return redirect('/prijava');
    }


    public function prijava()
    {
        return view('prijava');
    }

    public function provjeriPrijavu(request $request)
    {
        $podaci=$request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(auth::attempt($podaci))
            {
                $request->session()->regenerate();
                return rediract('/profil');
            }
            return back()->withErrors([
                'email'=>'Pogrešan email ili lozinka'
            ]);
    }

    public function profil()
    {
        return view('profil');
    }

    public function odjava(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/prijava');
    }

}
