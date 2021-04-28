<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTagsArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
         CREATE TABLE `articles_categories` (
             `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
             `id_article` BIGINT(20) NOT NULL,
             `id_tag` BIGINT(20) NOT NULL,
             PRIMARY KEY (`id`),
             FOREIGN KEY (`id_article`) REFERENCES articles(`id`)
             ON DELETE CASCADE
             ON UPDATE CASCADE,
             FOREIGN KEY (`id_tag`) REFERENCES tags (`id_tag`)
             ON DELETE CASCADE
             ON UPDATE CASCADE
             )ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags_articles');
    }
}
