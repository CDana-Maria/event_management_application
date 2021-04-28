<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE `tags` (
                `id_tag` BIGINT(20) NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(15) NOT NULL,
                `created_at` DATETIME NOT NULL,
                `updated_at` DATETIME NOT NULL,
                `slug` VARCHAR(200) UNIQUE,
                PRIMARY KEY (`id_tag`)
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
        Schema::dropIfExists('tags');
    }
}
