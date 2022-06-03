<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table="pets";
    public $timestamps = false;
    
    public function owner(){
        return $this->belongsTo(\App\Models\User::class, "owner_id", "id");
    }

    public function application(){
        return $this->belongsTo(\App\Models\Application::class, "pet", "id");
    }
}
