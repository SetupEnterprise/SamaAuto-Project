<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billets', function (Blueprint $table) {
            $table->bigIncrements('billets_id');
            $table->integer('vehicules_id');
            $table->foreign('vehicules_id')
                  ->references('billets_id')
                  ->on('vehicules')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->integer('users_id');
            $table->foreign('users_id')
                  ->references('billets_id')
                  ->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->string('libelle');
            $table->date('date_depart');
            $table->time('heure_depart');
            $table->string('etat',20);
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
        Schema::dropIfExists('billets');
    }
}
