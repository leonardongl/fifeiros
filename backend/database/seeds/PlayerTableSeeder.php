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
            'name' => 'Alisson',
            'shirt' => '13',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '2',
            'name' => 'Van Dijk',
            'shirt' => '4',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '2',
            'name' => 'Gomez',
            'shirt' => '12',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '3',
            'name' => 'Arnold',
            'shirt' => '66',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '4',
            'name' => 'Robertson',
            'shirt' => '26',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '5',
            'name' => 'Fabinho',
            'shirt' => '3',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '6',
            'name' => 'Henderson',
            'shirt' => '14',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '6',
            'name' => 'Thiago',
            'shirt' => '6',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '10',
            'name' => 'Mané',
            'shirt' => '10',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '11',
            'name' => 'Salah',
            'shirt' => '11',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '12',
            'name' => 'Firmino',
            'shirt' => '9',
        ]);
    }
}
