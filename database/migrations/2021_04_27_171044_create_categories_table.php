<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       DB::statement("
        CREATE TABLE `categories` (
            `id_category` BIGINT(20) NOT NULL AUTO_INCREMENT,
            `name` VARCHAR(15) NOT NULL,
            `id_article` BIGINT(20) NOT NULL,
            `created_at` DATETIME NOT NULL,
            `updated_at` DATETIME NOT NULL,
            `parent_category` BIGINT(20),
            `slug`  VARCHAR(15) UNIQUE NOT NULL,
            `seo_title` VARCHAR(60) UNIQUE,
            `seo_description` VARCHAR(155) UNIQUE,
            PRIMARY KEY (`id_category`),
            FOREIGN KEY (`id_article`) REFERENCES articles (`id`)
            ON UPDATE CASCADE
            ON DELETE CASCADE
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
        Schema::dropIfExists('categories');
    }
}
