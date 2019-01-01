<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('price', 8, 2);
            $table->string('service', 255);
            $table->string('transport',255);
            $table->string('reservation',255);
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
        Schema::drop('prijevoz');
    }
}
