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
            'coach' => 'Klopp',
            'img' => 'path/example'
        ]);
    }
}
