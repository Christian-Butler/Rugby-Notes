<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

   protected $fillable =[
   'first_name', 
   'last_name', 
   'dob', 
   'player_number',
   'img'

    ];

    // protected $dates =[]
}
