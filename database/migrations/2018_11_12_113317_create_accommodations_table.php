<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccommodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommodations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('accommodation_name',255);
            $table->string('apartment_hotel',255);
            $table->decimal('discount',8,2);
            $table->decimal('the_price_of_accommodation',8,2);
            $table->decimal('total_accommodation_price', 8,2);
            $table->string('max_accommodation',255);
            $table->unsignedInteger('destination_id');
            $table->foreign('destination_id')->references('id')->on('destinations');
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
        Schema::drop('accommodations');
    }
}
