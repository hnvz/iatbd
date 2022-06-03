<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetType extends Model
{
    use HasFactory;

    protected $table = "pet_type";

    public function allTypes(){
        return $this->hasMany('\App\Models\Pet', "type", "type");
    }
}
