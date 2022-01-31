<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
    'title',
            
    'film_director',

    'release_date',

    'duration'
    ];
}
