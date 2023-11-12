<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            ['movie_id'=>1,'genre_id'=>1],
            ['movie_id'=>1,'genre_id'=>2],
            ['movie_id'=>2,'genre_id'=>1],
            ['movie_id'=>3,'genre_id'=>1],
        ];
        DB::table('genre_movies')->insert($datas);
    }
}
