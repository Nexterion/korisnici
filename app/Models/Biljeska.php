<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biljeska extends Model
{
    public $timestamps=false;

    protected $table='biljeske';                        //uvijek je ista naredba, a biljeske se naravno mijenja - model zna s kojom tablicom radi

    protected $fillable=['naslov', 'sadrzaj'];          //koja polja se smiju puniti s metodom create

    public function user()
    {
        return $this->belongsTo(User::class);           //biljeska pripada useru
    }
}
