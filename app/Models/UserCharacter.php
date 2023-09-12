<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCharacter extends Model
{
  protected $fillable = [
    'user_id',
    'character_id',
    'character_received',


  ];
}
