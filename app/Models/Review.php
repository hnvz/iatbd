<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table="reviews";

    public function receivedReviews(){
        return $this->hasMany(\App\Models\Review::class, "receiver_id", "id");
    }

    public function sentReviews(){
        return $this->hasMany(\App\Models\Review::class, "sender_id", "id");
    }
}
