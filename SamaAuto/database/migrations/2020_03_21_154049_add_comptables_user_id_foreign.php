<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddComptablesUserIdForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comptables', function (Blueprint $table) {
            $table->unsignedBigInteger('users_id')->unique();
            $table->foreign('users_id')
                    ->references('users_id')
                    ->on('users')
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
        Schema::table('comptables', function (Blueprint $table) {
             $table->dropForeign(['users_id']);
            $table->dropColumn('users_id');
        });
    }
}
