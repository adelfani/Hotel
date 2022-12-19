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
        Schema::create('kamer', function (Blueprint $table) {
           $table->string('sort', 50);
           $table->string('foto', 100);
           $table->integer('Kamernummer')->nullable(false)->primary();
           $table->float('opervlakte');
           $table->boolean('minibar_beschikbaarheid');
           $table->boolean('bad_beschikbaarheid');
           $table->integer('aantal_personen');
           $table->binary('prijs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hotel');
    }
};
