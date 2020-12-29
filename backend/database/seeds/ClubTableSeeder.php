<?php

use App\Models\Club;
use Illuminate\Database\Seeder;

class ClubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Club::create([
            'name' => 'Liverpool FC',
            'abbreviation' => 'LFC',
            'coach' => 'Leonardo',
            'img' => 'clubs/liverpool.png'
        ]);

        Club::create([
            'name' => 'Juventus FC',
            'abbreviation' => 'JUV',
            'coach' => 'Kaio',
            'img' => 'clubs/juventus.png'
        ]);

        Club::create([
            'name' => 'Tottenham FC',
            'abbreviation' => 'TOT',
            'coach' => 'Edy',
            'img' => 'clubs/tottenham.png'
        ]);
    }
}
