<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    // Permet de pouvoir enregistré au modifié dans n'importe quel colonne de la table messages
    protected $guarded = [];
    // Relation Many to One avec la table conversations (plusieurs message appartiennent à une conversation)
    public function conversation() {
        return $this->belongsTo(Conversation::class);
    }
    // Relation Many to One avec la table users (plusieurs message appartiennent à un utilisateur)
    public function user() {
        return $this->belongsTo(User::class);
    }
}
