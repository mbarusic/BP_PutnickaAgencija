<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('max_num_of_pass',255)->nullable();
            $table->date('date_of_travel');
            $table->unsignedInteger('transport_id');
            $table->foreign('transport_id')->references('id')->on('transports');
            $table->unsignedInteger('accommodation_id');
            $table->foreign('accommodation_id')->references('id')->on('accommodations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('travels');
    }
}
