<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
  protected $fillable = [
    'name',
    'element_id',
    'img_path',
    'dps',
    'sub_dps',
    'support'
  ];
}
