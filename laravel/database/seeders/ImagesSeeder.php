<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement ("
            INSERT INTO `images` (`path`, `name`, `created_at`, `updated_at`, `size`)
            VALUES ('../images/slider3.jpg', 'dark', '2021-04-21 00:00:00', '2021-04-22 00:00:00', '800x800px'),
                   ('../images/slider3.jpg', 'party', '2021-04-21 00:00:00', '2021-04-22 00:00:00', '1200x800px'),
                   ('../images/slider3.jpg', 'music', '2021-04-21 00:00:00', '2021-04-22 00:00:00', '800x1200px');
        ");
    }
}


