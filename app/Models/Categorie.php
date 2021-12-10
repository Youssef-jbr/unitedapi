<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function film_categorie() {
        return $this->belongsToMany(Film::class, 'film_categorie');
    }
    public function serie_categorie() {
        return $this->belongsToMany(Serie::class, 'serie_categorie');
    }

}
