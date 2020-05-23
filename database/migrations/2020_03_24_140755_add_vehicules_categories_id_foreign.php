<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVehiculesCategoriesIdForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicules', function (Blueprint $table) {
            $table->unsignedBigInteger('categories_id')->after('image_vehicule');
            $table->foreign('categories_id')
                  ->references('categories_id')
                  ->on('categories')
                  ->onDelete('restrict')
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
        Schema::table('vehicules', function (Blueprint $table) {
            $table->dropForeign(['categories_id']);
           $table->dropColumn('categories_id');
       });
    }
}
