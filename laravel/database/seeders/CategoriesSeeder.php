<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("
            INSERT INTO `categories` (`name`, `created_at`, `updated_at`, `parent_category`, `slug`, `SEO_title`, `SEO_description`)
            VALUES ('music', '2021-04-20 00:00:00', '2021-04-21 00:00:00', 'entertainment', 'music', 'music for lorem ipsum', 'Nihil iusto iusto explicabo. Sed voluptatibus maiores autem consequatur sed nisi ipsa. Delectus animi maxime rerum quia non.'),
                   ('movies', '2021-04-22 00:00:00', '2021-04-24 00:00:00', 'entertainment', 'movies', 'movies for lorem ipsum' ,'Nihil iusto iusto explicabo. Sed voluptatibus maiores autem consequatur sed nisi ipsa. Delectus animi maxime rerum quia non. '),
                   ('dance', '2021-04-25 00:00:00', '2021-04-28 00:00:00', 'sport', 'dance', 'dance for lorem ipsum', 'Nihil iusto iusto explicabo. Sed voluptatibus maiores autem consequatur sed nisi ipsa. Delectus animi maxime rerum quia non.');
        ");
    }
}

