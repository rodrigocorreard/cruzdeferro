<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
         $this->call(CargoTableSeeder::class);
         $this->call(SedeTableSeeder::class);
         $this->call(MembroTableSeeder::class);
         $this->call(EstadoTableSeeder::class);
    }
}
