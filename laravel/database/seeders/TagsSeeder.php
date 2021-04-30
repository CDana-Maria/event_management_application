<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("
            INSERT INTO `tags` (`name`, `created_at`, `updated_at`, `slug`)
            VALUES ('entertainment', '2021-04-12 00:00:00', '2021-04-23 00:00:00', 'entert'),
                   ('dance', '2021-04-16 00:00:00', '2021-04-26 00:00:00', 'dance'),
                   ('new', '2021-04-12 00:00:00', '2021-04-23 00:00:00', 'new');
        ");
    }
}
