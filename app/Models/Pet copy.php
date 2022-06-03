<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table="pets";

    public function owner(){
        return $this->belongsTo(\App\Models\User::class, "owner", "id");
    }
}
