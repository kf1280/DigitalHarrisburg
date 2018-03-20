<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordinateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinates', function(Blueprint $table) {
            $table->increments('id');
            $table->double('latitude');
            $table->double('longitude');
            $table->timestamps();
            $table->integer('marker_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('coordinates');
    }
}
