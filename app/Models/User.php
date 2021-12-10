<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Epitaphe;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role() {
        return $this->belongsTo(Role::class);
    }
    public function conversations() {
        return $this->belongsToMany(Conversation::class, 'conversation_users')->withPivot('user_id')->withTimestamps();
    }
    public function avis() {
        return $this->belongsToMany(Film::class, 'avis')->withPivot('user_id')->withTimestamps();
    }
    public function billets() {
        return $this->belongsToMany(Film::class, 'billets')->withPivot('user_id')->withTimestamps();
    }
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
}
