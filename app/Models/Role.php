<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    // Permet de pouvoir enregistré au modifié dans n'importe quel colonne de la table roles
    protected $guarded = [];
    // Relation Many to Many avec la table users (plusieurs utilisateurs peuvent avoir plusieurs rôles et l'inverse également)
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
