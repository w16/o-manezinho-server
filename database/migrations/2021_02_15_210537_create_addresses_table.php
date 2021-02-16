<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('street');
            $table->string('country');
            $table->string('neighborhood');
            $table->string('postal_code');
            $table->integer('latitude');
            $table->integer('longitude');

            $table->unsignedBigInteger("place_id");
            $table->foreign("place_id")->references("id")->on("places");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
