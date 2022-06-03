<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ownedPets(){
        return $this->hasMany(\App\Models\Pet::class, "owner_id", "id");
    }

    public function receivedApplications(){
        return $this->hasMany(\App\Models\Application::class, "receiver_id", "id");
    }

    public function sentApplications(){
        return $this->hasMany(\App\Models\Application::class, "sender_id", "id");
    }

    public function houseImages(){
        return $this->hasOne(\App\Models\House::class, "houseowner_id", "id");
    }
}
