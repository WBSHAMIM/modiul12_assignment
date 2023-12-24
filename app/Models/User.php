<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    function bus(){
       return $this->hasMany(Bus::class);
    }
    function place(){
       return $this->hasOne(Place::class);
    }
}
