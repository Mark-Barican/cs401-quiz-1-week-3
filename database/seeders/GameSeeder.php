<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                'title' => 'Bloodborne',
                'developer' => 'FromSoftware',
                'publisher' => 'Sony',
                'genre' => 'RPG',
                'releaseDate' => 'March 24, 2015',
                'platform' => 'PS4',
                'price' => 20
            ],
            [
                'title' => 'Resident Evil 2 Remake',
                'developer' => 'Capcom',
                'publisher' => 'Capcom',
                'genre' => 'Survival Horror',
                'releaseDate' => 'January 25, 2019',
                'platform' => 'PS, Xbox, PC',
                'price' => 50
            ],
            [
                'title' => 'Valheim',
                'developer' => 'Iron Gate Studio',
                'publisher' => 'Coffee Stain Publishing',
                'genre' => 'Survival Co-Op',
                'releaseDate' => 'February 2 2021',
                'platform' => 'PC',
                'price' => 30
            ],
            [
                'title' => 'Silent Hill 2',
                'developer' => 'Bloober Team',
                'publisher' => 'Konami',
                'genre' => 'Psychological Horror',
                'releaseDate' => 'October 8, 2024',
                'platform' => 'PS, Xbox, PC',
                'price' => 60
            ],
            [
                'title' => 'Clair Obscur: Expedition 33',
                'developer' => 'Sandfall Interactive',
                'publisher' => 'Kepler Interactive',
                'genre' => 'RPG',
                'releaseDate' => 'April 24 2025',
                'platform' => 'PS, Xbox, PC',
                'price' => 50
            ]
        ];

        foreach ($games as $game) {
            Game::create($game);
        }
    }
}
