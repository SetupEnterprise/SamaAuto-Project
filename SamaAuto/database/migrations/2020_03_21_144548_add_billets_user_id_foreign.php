<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBilletsUserIdForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('billets', function (Blueprint $table) {
            $table->unsignedBigInteger('users_id')->after('billets_id');
            $table->foreign('users_id')
                  ->references('users_id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->unsignedBigInteger('trajets_id')->after('users_id');
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
        Schema::table('billets', function (Blueprint $table) {
            $table->dropForeign(['users_id']);
            $table->dropColumn('users_id');
        });
    }
}
