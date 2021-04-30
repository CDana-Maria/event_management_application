<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement ("
            INSERT INTO `comments` (`message`, `author`, `created_at`, `updated_at`, `approved_at`)
            VALUES ('Very interesting!', 'Bill Jones', '2021-04-20 00:00:00', '2021-04-21 00:00:00', '2021-04-21 00:00:00'),
                   ('I agree!', 'Ada Gites', '2021-04-21 00:00:00', '2021-04-23 00:00:00', '2021-04-25 00:00:00'),
                   ('Usefull!', 'Miranda Fitinh', '2021-04-10 00:00:00', '2021-04-11 00:00:00', '2021-04-11 00:00:00');
        ");   
    }
}


