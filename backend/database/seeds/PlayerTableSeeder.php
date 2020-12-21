<?php

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::create([
            'club_id' => '1',
            'role_id' => '1',
            'name' => 'Salah',
            'shirt' => '11',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '1',
            'name' => 'Firmino',
            'shirt' => '9',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '1',
            'name' => 'Mané',
            'shirt' => '10',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '1',
            'name' => 'Henderson',
            'shirt' => '14',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '1',
            'name' => 'Robertson',
            'shirt' => '26',
        ]);
    }
}
