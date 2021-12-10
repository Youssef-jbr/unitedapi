<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function serie_realisateur() {
        return $this->belongsToMany(Realisateur::class, 'serie_realisateur');
    }
    public function serie_categorie() {
        return $this->belongsToMany(Categorie::class, 'serie_categorie');
    }
}
