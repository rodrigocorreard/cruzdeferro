<?php

use Illuminate\Database\Seeder;
use App\Cargo;
class CargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cargo::create(
            [
                'cargo'     => 'Presidente',
                'nivel'     => 9,
            ]
        );
        Cargo::create(
            [
                'cargo'     => 'Diretor',
                'nivel'     => 8,
            ]
        );
        Cargo::create(
            [
                'cargo'     => 'Secretário',
                'nivel'     => 7,
            ]
        );
        Cargo::create(
            [
                'cargo'     => 'Tesoureiro',
                'nivel'     => 6,
            ]
        );
        Cargo::create(
            [
                'cargo'     => 'Coordenador',
                'nivel'     => 5,
            ]
        );
        Cargo::create(
            [
                'cargo'     => 'Membro',
                'nivel'     => 4,
            ]
        );

    }
}
