<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE TABLE `comments` (
            `id_comment` BIGINT(20) NOT NULL AUTO_INCREMENT,
            `message` VARCHAR(150) NOT NULL,
            `author` VARCHAR(50) NOT NULL,
            `id_article` BIGINT(20) NOT NULL,
            `created_at` DATETIME NOT NULL,
            `updated_at` DATETIME NOT NULL,
            `approved_at` DATETIME NOT NULL,
            PRIMARY KEY (`id_comment`),
            FOREIGN KEY (`id_article`) REFERENCES articles (`id`)
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
        Schema::dropIfExists('comments');
    }
}
