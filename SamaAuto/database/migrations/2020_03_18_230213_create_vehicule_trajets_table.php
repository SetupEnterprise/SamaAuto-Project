<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculeTrajetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicule_trajets', function (Blueprint $table) {
            $table->bigIncrements('vehicule_trajets_id');
            $table->integer('trajets_id')->unique();
            $table->foreign('trajets_id')
                  ->references('vehicule_trajets_id')
                  ->on('trajets')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->integer('vehicules_id')->unique();
            $table->foreign('vehicules_id')
                  ->references('vehicule_trajets_id')
                  ->on('vehicules')
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
        Schema::dropIfExists('vehicule_trajets');
    }
}
