<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChauffeursUserIdForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chauffeurs', function (Blueprint $table) {
            $table->unsignedBigInteger('users_id')->unique()->after('chauffeurs_id');
            $table->foreign('users_id')
                    ->references('users_id')
                    ->on('users')
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
        Schema::table('chauffeurs', function (Blueprint $table) {
             $table->dropForeign(['users_id']);
            $table->dropColumn('users_id');
        });
    }
}
