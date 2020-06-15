<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('customer_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->nullable();
            $table->integer('contact_mobile');
            $table->integer('alternative_mobile')->nullable();
            $table->string('address');
            $table->string('location')->nullable();
            $table->string('city');
            $table->string('police_station');
            $table->string('district');
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
        Schema::dropIfExists('shippings');
    }
}
