<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    public function avis() {
        return $this->belongsToMany(User::class, 'avis')->withPivot('commentaires')->withTimestamps();
    }
    public function billets() {
        return $this->belongsToMany(User::class, 'billets')->withPivot('prix')->withTimestamps();
    }
    public function film_categorie() {
        return $this->belongsToMany(Categorie::class, 'film_categorie');
    }
    public function film_realisateur() {
        return $this->belongsToMany(Realisateur::class, 'film_realisateur');
    }
}
