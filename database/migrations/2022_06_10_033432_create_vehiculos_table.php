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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_placas');
            $table->string('tipo');
            $table->unsignedBigInteger('piloto_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('fabricante_id');
            $table->timestamps();
            $table->foreign('piloto_id')->references('id')->on('piloto')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('color')->onDelete('cascade');
            $table->foreign('fabricante_id')->references('id')->on('fabricante')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
};
