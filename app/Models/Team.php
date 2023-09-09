<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
  protected $fillable = [
    'first_member',
    'second_member',
    'third_member',
    'fourth_member'
  ];
}
