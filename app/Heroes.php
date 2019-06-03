<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Heroes extends Model
{
    protected $fillable = ['nickname', 'real_name', 'origin_description', 'superpowers', 'catch_phrase'];
}
