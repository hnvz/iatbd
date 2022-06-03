<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table="applications";

    public function receiver(){
        return $this->belongsTo(\App\Models\User::class, "receiver_id", "id");
    }

    public function sender(){
        return $this->belongsTo(\App\Models\User::class, "sender_id", "id");
    }

    public function pet(){
        return $this->belongsTo(\App\Models\Pet::class, "pet", "id");
    }
}
