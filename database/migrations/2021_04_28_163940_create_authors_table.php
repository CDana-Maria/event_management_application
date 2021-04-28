<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE `authors` (
                `id_author` BIGINT(20) NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(50) NOT NULL,
                `email` VARCHAR(50) NOT NULL,
                `id_article` BIGINT(20) NOT NULL,
                PRIMARY KEY (`id_author`),
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
        Schema::dropIfExists('authors');
    }
}
