<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $table="houses";

    public function owner(){
        return $this->belongsTo(\App\Models\User::class, "houseowner_id", "id");
    }
}
