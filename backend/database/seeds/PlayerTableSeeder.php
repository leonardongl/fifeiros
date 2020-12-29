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
            'img' => 'players/alisson.png',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '2',
            'name' => 'Van Dijk',
            'shirt' => '4',
            'img' => 'players/vandijk.png',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '2',
            'name' => 'Gomez',
            'shirt' => '12',
            'img' => 'players/gomez.png',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '3',
            'name' => 'Arnold',
            'shirt' => '66',
            'img' => 'players/arnold.png',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '4',
            'name' => 'Robertson',
            'shirt' => '26',
            'img' => 'players/robertson.png',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '5',
            'name' => 'Fabinho',
            'shirt' => '3',
            'img' => 'players/fabinho.png',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '6',
            'name' => 'Henderson',
            'shirt' => '14',
            'img' => 'players/henderson.png',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '6',
            'name' => 'Thiago',
            'shirt' => '6',
            'img' => 'players/thiago.png',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '10',
            'name' => 'Mané',
            'shirt' => '10',
            'img' => 'players/mane.png',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '11',
            'name' => 'Salah',
            'shirt' => '11',
            'img' => 'players/salah.png',
        ]);

        Player::create([
            'club_id' => '1',
            'role_id' => '12',
            'name' => 'Firmino',
            'shirt' => '9',
            'img' => 'players/firmino.png',
        ]);

        Player::create([
            'club_id' => '2',
            'role_id' => '1',
            'name' => 'Szczęsny',
            'shirt' => '1',
            'img' => 'players/szczęsny.png',
        ]);

        Player::create([
            'club_id' => '2',
            'role_id' => '2',
            'name' => 'De Ligt',
            'shirt' => '4',
            'img' => 'players/deligt.png',
        ]);

        Player::create([
            'club_id' => '2',
            'role_id' => '2',
            'name' => 'Bonucci',
            'shirt' => '19',
            'img' => 'players/bonucci.png',
        ]);

        Player::create([
            'club_id' => '2',
            'role_id' => '3',
            'name' => 'Cuadrado',
            'shirt' => '16',
            'img' => 'players/cuadrado.png',
        ]);

        Player::create([
            'club_id' => '2',
            'role_id' => '4',
            'name' => 'Danilo',
            'shirt' => '13',
            'img' => 'players/danilo.png',
        ]);

        Player::create([
            'club_id' => '2',
            'role_id' => '6',
            'name' => 'Arthur',
            'shirt' => '5',
            'img' => 'players/arthur.png',
        ]);

        Player::create([
            'club_id' => '2',
            'role_id' => '6',
            'name' => 'Rabiot',
            'shirt' => '25',
            'img' => 'players/rabiot.png',
        ]);

        Player::create([
            'club_id' => '2',
            'role_id' => '8',
            'name' => 'Bernardeschi',
            'shirt' => '33',
            'img' => 'players/bernardeschi.png',
        ]);

        Player::create([
            'club_id' => '2',
            'role_id' => '12',
            'name' => 'Dybala',
            'shirt' => '10',
            'img' => 'players/dybala.png',
        ]);

        Player::create([
            'club_id' => '2',
            'role_id' => '13',
            'name' => 'Morata',
            'shirt' => '9',
            'img' => 'players/morata.png',
        ]);

        Player::create([
            'club_id' => '2',
            'role_id' => '13',
            'name' => 'Ronaldo',
            'shirt' => '7',
            'img' => 'players/ronaldo.png',
        ]);
    }
}
