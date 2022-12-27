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
        Schema::create('kamers', function (Blueprint $table) {
           $table->id();
           $table->string('sort', 50);
           $table->string('foto', 100);
           $table->integer('Kamernummer');
           $table->float('opervlakte');
           $table->boolean('minibar_beschikbaarheid');
           $table->boolean('bad_beschikbaarheid');
           $table->integer('aantal_personen');
           $table->binary('prijs');
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
        Schema::drop('kamers');
    }
};
