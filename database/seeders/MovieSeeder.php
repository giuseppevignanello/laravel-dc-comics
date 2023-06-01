<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = config('movies');

        foreach ($movies as $movie) {
            $dcMovie = new Movie();
            $dcMovie->title = $movie['title'];
            $dcMovie->description = $movie['description'];
            $dcMovie->director = $movie['director'];
            $dcMovie->year = $movie['year'];
            $dcMovie->rating = $movie['rating'];
            $dcMovie->poster = $movie['poster'];
            $dcMovie->save();
        }
    }
}
