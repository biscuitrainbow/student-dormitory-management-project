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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username');
            $table->string('password');
            $table->rememberToken();

         
            $table->timestamps();
        });

        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('building');
            $table->string('number');
            $table->string('furniture');
            $table->string('document');
            $table->string('status');
            $table->timestamps();
        });

       
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('id_card');
            $table->string('address');
            $table->string('telephone');
            $table->string('e_mail');
            $table->string('document');
            $table->string('status');
            $table->timestamps();
        });

        Schema::create('maintenances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('status');
            $table->string('phone');

            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            
            
            $table->timestamps();
        });

        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->float('room_price');
            $table->integer('internet_price');
            $table->integer('water_unit_price');
            $table->integer('electricity_unit_price');
            $table->integer('last_water_unit');
            $table->integer('water_unit');
            $table->integer('last_electricity_unit');
            $table->integer('electricity_unit');
            $table->float('total');
            $table->string('status');

            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');

            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('earnest_money');
            $table->string('insurer_money');
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
            $table->string('witness_name');
            $table->string('document');
            $table->string('status');

            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');

            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            
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
