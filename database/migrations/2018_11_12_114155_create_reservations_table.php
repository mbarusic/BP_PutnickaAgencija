<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('period_of_travel');
            $table->string('name_surname_of_pass', 255);
            $table->string('e_mail_pass')->unique();
            $table->string('phone_num_pass', 255);
            $table->char('num_of_adults', 100);
            $table->char('num_children', 100);
            $table->unsignedInteger('travel_id');
            $table->foreign('travel_id')->references('id')->on('travels');
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
        Schema::drop('reservations');
    }
}
