<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
  protected $fillable = [
    'name',
    'rating_id',
    'element_id',
    'constellation_id',
    'img_path'
  ];
}
