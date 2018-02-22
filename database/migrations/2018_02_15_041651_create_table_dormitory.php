<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDormitory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('username');
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('building');
            $table->string('number');
            $table->string('status');
            
            $table->timestamps();
        });

       
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('address');
            $table->string('email');
            $table->string('tel');
            $table->timestamps();
        });

        Schema::create('maintenances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('status');
            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms');

            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');
            
            $table->timestamps();
        });

        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->float('price');
            $table->integer('water_unit');
            $table->integer('electricity_unit');
            $table->integer('internet');
            $table->float('total');

            $table->integer('room_id')->unsigned();

            $table->foreign('room_id')->references('id')->on('rooms');

            $table->integer('customer_id')->unsigned();

            $table->foreign('customer_id')->references('id')->on('customers');
            $table->timestamps();
        });

        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
            

            $table->integer('room_id')->unsigned();

            $table->foreign('room_id')->references('id')->on('rooms');

            $table->integer('customer_id')->unsigned();

            $table->foreign('customer_id')->references('id')->on('customers');
            
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
        //
    }
}
