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
        Schema::create('desarrollo__territorials', function (Blueprint $table) {
            $table->id();
            $table->text("pregunta1");
            $table->text("pregunta2");
            $table->text("pregunta3");
            $table->text("pregunta4");
            $table->text("pregunta5");
            $table->text("pregunta6");
            $table->text("pregunta7");
            $table->text("pregunta8");
            $table->text("pregunta9");
            $table->text("pregunta10");
            $table->text("pregunta11");
            $table->text("pregunta12");
            $table->text("pregunta13");
            $table->text("pregunta14");
            $table->text("pregunta15");
            $table->text("pregunta16");
            $table->text("pregunta17");
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
        Schema::dropIfExists('desarrollo__territorials');
    }
};
