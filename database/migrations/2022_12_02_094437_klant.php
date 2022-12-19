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
        Schema::create('klant', function (Blueprint $table) {
           $table->id();
           $table->dateTime('datum_van_boeking');
           $table->string('naam', 50);
           $table->string('address', 50);
           $table->dateTime('Aankomstdatum');
           $table->dateTime('Vertrekdatum');
           $table->integer('Creditkaartnummer');
           $table->foreignId('Kamernummer')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('klant');
    }
};
