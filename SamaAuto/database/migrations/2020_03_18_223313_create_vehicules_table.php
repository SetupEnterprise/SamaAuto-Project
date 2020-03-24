<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->bigIncrements('vehicules_id');
            $table->string('matricule',100)->unique();
            $table->integer('categories_id');
            $table->string('image_vehicule');
            $table->timestamps();
            //$table->unsignedBigInteger('type_vehicule_id')->unique();

            $table->foreign('categories_id')
                  ->references('categories_id')
                  ->on('categorie')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicules');
    }
}
