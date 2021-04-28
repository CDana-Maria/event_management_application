<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE `images` (
                `id_image` BIGINT(20) NOT NULL AUTO_INCREMENT,
                `path` VARCHAR(50) NOT NULL,
                `name` VARCHAR(15),
                `created_at` DATETIME NOT NULL,
                `updated_at` DATETIME NOT NULL,
                `size` VARCHAR(25) NOT NULL,
                PRIMARY KEY (`id_image`)
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
        Schema::dropIfExists('images');
    }
}
