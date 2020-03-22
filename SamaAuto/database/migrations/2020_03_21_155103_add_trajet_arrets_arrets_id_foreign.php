<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrajetArretsArretsIdForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trajet_arrets', function (Blueprint $table) {
            $table->unsignedBigInteger('arrets_id')->unique();
            $table->foreign('arrets_id')
                  ->references('arrets_id')
                  ->on('arrets')
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
        Schema::table('trajet_arrets', function (Blueprint $table) {
             $table->dropForeign(['arrets_id']);
            $table->dropColumn('arrets_id');
        });
    }
}
