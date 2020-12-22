<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Goleiro',
            'abbreviation' => 'GOL'
        ]);

        Role::create([
            'name' => 'Zagueiro',
            'abbreviation' => 'ZAG'
        ]);

        Role::create([
            'name' => 'Lateral Direito',
            'abbreviation' => 'LD'
        ]);

        Role::create([
            'name' => 'Lateral Esquerdo',
            'abbreviation' => 'LE'
        ]);

        Role::create([
            'name' => 'Volante',
            'abbreviation' => 'VOL'
        ]);

        Role::create([
            'name' => 'Meio Campo',
            'abbreviation' => 'MC'
        ]);

        Role::create([
            'name' => 'Meia Direito',
            'abbreviation' => 'MD'
        ]);

        Role::create([
            'name' => 'Meia Esquerdo',
            'abbreviation' => 'ME'
        ]);

        Role::create([
            'name' => 'Meia Atacante',
            'abbreviation' => 'MEI'
        ]);

        Role::create([
            'name' => 'Ponta Direita',
            'abbreviation' => 'PD'
        ]);

        Role::create([
            'name' => 'Ponta Esquerda',
            'abbreviation' => 'PE'
        ]);

        Role::create([
            'name' => 'Segundo Atacante',
            'abbreviation' => 'SA'
        ]);

        Role::create([
            'name' => 'Atacante',
            'abbreviation' => 'ATA'
        ]);
    }
}
