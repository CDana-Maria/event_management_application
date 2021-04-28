<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE `articles` (
                `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
                `title` VARCHAR(35) NOT NULL,
                `short_description` VARCHAR(100),
                `content` VARCHAR (255) NOT NULL,
                `created_at` DATETIME NOT NULL,
                `modified_at` DATETIME NOT NULL,
                `published_at` DATETIME NOT NULL,
                `id_image` BIGINT(20) NOT NULL,
                `seo_title` VARCHAR(60) UNIQUE,
                `seo_description` VARCHAR(155) UNIQUE,
                `slug` VARCHAR(15) UNIQUE,
                PRIMARY KEY (`id`),
                FOREIGN KEY (`id_image`) REFERENCES images (`id_image`)
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
        Schema::dropIfExists('articles');
    }
}

