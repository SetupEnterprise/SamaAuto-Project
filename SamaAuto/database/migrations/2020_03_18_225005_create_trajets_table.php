<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrajetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trajets', function (Blueprint $table) {
            $table->bigIncrements('trajets_id');
            $table->string('point_depart',100)->unique();
            $table->string('point_arrivee',100)->unique();
            $table->integer('prix');
            $table->integer('billets_id');
            $table->foreign('billets_id')
                  ->references('trajets_id')
                  ->on('billets')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->integer('distance');
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
        Schema::dropIfExists('trajets');
    }
}
