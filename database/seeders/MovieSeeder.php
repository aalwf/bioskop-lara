<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'name' => 'Spiderman: No Way Home',
            'genre_id' => 1,
            'image' => 'spiderman-no-way-home.jpg',
            'minutes' => 148,
            'director' => 'Jon Watts',
            'studio_name' => 'Anggrek',
            'studio_capacity' => 96
        ]);

        Movie::create([
            'name' => 'The Batman',
            'genre_id' => 1,
            'image' => 'the-batman.jpg',
            'minutes' => 176,
            'director' => 'Matt Reeves',
            'studio_name' => 'Tulip',
            'studio_capacity' => 72
        ]);

        Movie::create([
            'name' => 'Parasite',
            'genre_id' => 6,
            'image' => 'parasite.jpg',
            'minutes' => 132,
            'director' => 'Bong Joon Ho',
            'studio_name' => 'Anyelir',
            'studio_capacity' => 84
        ]);

        Movie::create([
            'name' => 'Joker',
            'genre_id' => 2,
            'image' => 'joker.jpg',
            'minutes' => 122,
            'director' => 'Todd Phillips',
            'studio_name' => 'Amaryllis',
            'studio_capacity' => 96
        ]);

        Movie::create([
            'name' => 'The Godfather',
            'genre_id' => 1,
            'image' => 'the-godfather.jpg',
            'minutes' => 175,
            'director' => 'F. Ford Coppola',
            'studio_name' => 'Lily',
            'studio_capacity' => 72
        ]);

        Movie::create([
            'name' => 'The Conjuring 2',
            'genre_id' => 3,
            'image' => 'the-conjuring-2.jpeg',
            'minutes' => 134,
            'director' => 'James Wan',
            'studio_name' => 'Mawar',
            'studio_capacity' => 84
        ]);

        Genre::create([
            "name" => "Action"
        ]);

        Genre::create([
            "name" => "Drama"
        ]);

        Genre::create([
            "name" => "Horror"
        ]);

        Genre::create([
            "name" => "Romance"
        ]);

        Genre::create([
            "name" => "Comedy"
        ]);

        Genre::create([
            "name" => "Thriller"
        ]);
    }
}
