<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsAndOrganizatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('events_and_organizators');
        Schema::create('events_and_organizators', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('service_id');
            $table->BigInteger('organizator_id');

            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('organizator_id')->references('id')->on('organizators');
      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events_and_organizators');
    }
}

   