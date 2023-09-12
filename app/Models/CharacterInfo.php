<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterInfo extends Model
{
  protected $fillable = [
    'character_id',
    'rating_id',
    'element_id',
    'constellation_id',
    'position_id',
  ];
}
