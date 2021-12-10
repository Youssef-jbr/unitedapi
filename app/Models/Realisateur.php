<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisateur extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function film_realisateur() {
        return $this->belongsToMany(Film::class, 'film_realisateur');
    }
    public function serie_realisateur() {
        return $this->belongsToMany(Serie::class, 'serie_realisateur');
    }
}
