<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tulaj', function (Blueprint $table) {
            $table->id("tulaj_id");
            $table->string("Nev",30);
            $table->dateTime("Tuljog_kezd");
            $table->dateTime("Tuljog_veg");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tulaj');
    }
};
