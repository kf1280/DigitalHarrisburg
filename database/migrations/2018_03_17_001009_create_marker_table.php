<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markers', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->string('type');
            $table->timestamps();
            $table->integer('map_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('markers');
    }
}
