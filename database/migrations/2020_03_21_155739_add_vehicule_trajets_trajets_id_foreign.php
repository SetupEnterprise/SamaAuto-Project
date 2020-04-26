<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVehiculeTrajetsTrajetsIdForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicule_trajet', function (Blueprint $table) {
             $table->unsignedBigInteger('trajets_id')->unique();
            $table->foreign('trajets_id')
                  ->references('trajets_id')
                  ->on('trajets')
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
        Schema::table('vehicule_trajet', function (Blueprint $table) {
             $table->dropForeign(['trajets_id']);
            $table->dropColumn('trajets_id');
        });
    }
}
