<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("
            INSERT INTO `articles` (`title`, `short_description`, `content`, `created_at`, `modified_at`, `published_at`, `id_author`, `id_category`, `id_tag`, `id_image`, `SEO_title`, `SEO_description`,  `slug` ,`id_comment`)
            VALUES 
            ('Lorem', 'Nihil iusto iusto explicabo. Sed voluptatibus maiores autem consequatur.', 'Nihil iusto iusto explicabo. Sed voluptatibus maiores autem consequatur sed nisi ipsa. Delectus animi maxime rerum quia non. Adipisci hic eum dolore quidem et minima. ',   '2021-04-24 00:00:00', '2021-04-25 00:00:00', '2021-04-26 00:00:00', 3, 2, 1, 3,'lorem article', 'This is a lorem article from a self-made blog with lorem text.', 'lorem_article', 2),
            ('Ipsum', 'Enim eligendi et et dicta optio consequatur. Reprehenderit.', 'Enim eligendi et et dicta optio consequatur. Reprehenderit nobis corporis modi facere commodi. Vel a sed tempora dolore. Est ea sint eius tempore deserunt provident aut dolorem. ',  '2021-04-24 00:00:00', '2021-04-25 00:00:00', '2021-04-26 00:00:00', 2, 1, 3, 2, 'ipsum article', 'This is an ipsum article from a self-made blog with lorem text.', 'ipsum_article',1),
            ('Sin Dolor', 'Voluptatem consequatur vel qui dolore dolor porro.', ' Voluptatem consequatur vel qui dolore dolor porro. Qui itaque in excepturi. Enim sed autem doloremque error nemo. Corporis modi laborum et. Quisquam quod et sit quis architecto autem.', '2021-04-24 00:00:00', '2021-04-25 00:00:00', '2021-04-26 00:00:00', 1, 3, 1, 2, 'sin dolor article', 'This is a sin dolor article from a self-made blog with lorem text.', 'sin_dolor_article', 2);
            ");
    }
}


