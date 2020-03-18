<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrajetArretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trajet_arrets', function (Blueprint $table) {
            $table->bigIncrements('trajet_arrets_id');
            $table->integer('arrets_id')->unique();
            $table->foreign('arrets_id')
                  ->references('trajet_arrets_id')
                  ->on('arrets')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');


            $table->integer('trajets_id')->unique();
            $table->foreign('trajets_id')
                  ->references('trajet_arrets_id')
                  ->on('trajets')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
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
        Schema::dropIfExists('trajet_arrets');
    }
}
