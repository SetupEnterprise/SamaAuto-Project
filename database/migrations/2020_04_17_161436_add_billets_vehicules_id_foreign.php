<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBilletsVehiculesIdForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('billets', function (Blueprint $table) {
            $table->unsignedBigInteger('vehicules_id')->unique()->after('users_id');
           $table->foreign('vehicules_id')
                 ->references('vehicules_id')
                 ->on('vehicules')
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
        Schema::table('billets', function (Blueprint $table) {
            $table->dropForeign(['vehicules_id']);
           $table->dropColumn('vehicules_id');
       });
    }
}
