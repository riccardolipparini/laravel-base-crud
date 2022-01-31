<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        
        'title'=> $faker -> word(1, true),
            
        'film_director'=> $faker -> name(),
    
        'release_date'=> $faker -> date(),
    
        'duration'=> $faker -> numberbetween(70, 260),
    ];
});
