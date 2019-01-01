<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->char('num_of_pass', 100);
            $table->string('username_of_passenger', 255);
            $table->string('user_password', 255);
            $table->string('name_surname_of_pass', 255);
            $table->date('date_of_writing_acc');
            $table->date('due_date_of_acc');
            $table->string('payment_method', 255);
            $table->string('currency',255);
            $table->decimal('currency_exchange_rate', 8,2);
            $table->date('date_of_departure_of_the_passenger');
            $table->decimal('commission',8,2);
            $table->decimal('vat',8,2);
            $table->string('type_of_payment',255);
            $table->decimal('amount',12,2);
            $table->unsignedInteger('reservation_id');
            $table->foreign('reservation_id')->references('id')->on('reservations');
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
        Schema::drop('accounts');
    }
}
