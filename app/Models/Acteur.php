<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{
    use HasFactory;
    public function acteur_film()
    {
        return $this->belongsToMany(Film::class, 'acteur_film');
    }
    public function acteur_serie()
    {
        return $this->belongsToMany(Serie::class, 'acteur_serie');
    }
}
