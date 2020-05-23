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
            $table->unsignedBigInteger('clients_id')->after('billets_id');
            $table->foreign('clients_id')
                  ->references('clients_id')
                  ->on('clients')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->unsignedBigInteger('vendeurs_id')->after('clients_id')->nullable();
            $table->foreign('vendeurs_id')
                  ->references('vendeurs_id')
                  ->on('vendeurs')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->unsignedBigInteger('trajets_id')->after('vendeurs_id');
            $table->foreign('trajets_id')
                 ->references('trajets_id')
                 ->on('trajets')
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
        Schema::table('billets', function (Blueprint $table) {
            $table->dropForeign(['users_id']);
            $table->dropColumn('users_id');
        });
    }
}
