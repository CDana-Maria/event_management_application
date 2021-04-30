<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("
            INSERT INTO `authors` (`name`, `email`)
            VALUES ('Adam Jones', 'adam.jones@gmail.com'),
                   ('Bindi Irwin', 'bindi.irwin@gmail.com'),
                   ('Maurice Roy', 'maurice.roy@gmail.com');

        ");
    }
}

