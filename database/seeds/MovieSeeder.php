<?php

use Illuminate\Database\Seeder;
use App\Movie;
use App\Actor;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Movie::class, 20)
        ->make()
        ->each(function ($movie){

            $actor = Actor::inRandomOrder() -> first();
            $movie -> actor() -> associate($actor);
            $movie -> save();
        });
    }
}
