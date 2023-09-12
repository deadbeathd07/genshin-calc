<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
  protected $fillable = [
    'name',
    'first_element_id',
    'second_element_id',
  ];
}
