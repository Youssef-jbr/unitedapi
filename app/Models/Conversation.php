<?php

namespace App\Models;

use App\Models\User;
use App\Models\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conversation extends Model
{
    use HasFactory;
     // Permet de pouvoir enregistré au modifié dans n'importe quel colonne de la table conversations
     protected $guarded = [];
     // Relation Many to Many avec la table users (plusieurs utilisateurs peuvent avoir plusieurs conversation et l'inverse également)
     public function conversation_users()
     {
         return $this->belongsToMany(User::class, 'conversation_users');
     }
     // Relation One to Many avec la table messages (une conversation peut avoir plusieurs messages)
     public function messages()
     {
         return $this->hasMany(Message::class)->orderBy('created_at', 'DESC');
     }
}
