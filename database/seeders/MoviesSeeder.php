<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $movies = [
        //     [
        //         'title'=> 'Avengers: Endgame',
        //         'photo'=> 'avengersEndgame.jpg',
        //         'description'=> 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos actions and restore balance to the universe.',
        //     ],
        //     [
        //         'title'=> 'Oppenheimer',
        //         'photo'=> 'oppenheimer.jpg',
        //         'description'=> 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.',
        //     ],
        //     [
        //         'title'=> 'Barbie',
        //         'photo'=> 'barbie.jpg',
        //         'description'=> 'Barbie suffers a crisis that leads her to question her world and her existence.',
        //     ],
        // ];
        for($i = 0; $i < 10; $i++){
            $movies = [
                [
                    'title'=>fake()->word,
                    'photo'=>fake()->words,
                    'description'=>fake()->paragraph,
                    'rating'=>fake()->randomFloat(1),
                ],
            ];
        }
        DB::table('movies')->insert($movies);
    }
}
