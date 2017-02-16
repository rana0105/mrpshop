<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    
    public function up()
    {
        Schema:: create('clients' , function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('p_quantity');
            $table->string('t_p_quantity');
            $table->string('u_price');
            $table->string('t_price');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::drop("clients");
    }
}
