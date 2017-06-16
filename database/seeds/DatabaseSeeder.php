<?php

use Illuminate\Database\Seeder;
use App\Movie;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::create(['name' => 'Baywatch', 'detail' => 'Guardianes de la bahía.']);

        // $this->call(UsersTableSeeder::class);
    }
}
