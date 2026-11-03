<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biljeska;

class BiljeskaController extends Controller
{
    public function index()
    {
        $biljeske=auth()->user()->biljeske;
        return view('biljeske', ['biljeske' =>$biljeske]);
    }
}
