<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class EnregistrerAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::insert('insert into users (users_id,prenom, nom,telephone,adresse,email,password,statut,profil) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [1, 'Richard', 'Leroy','773489852','Avignon','richard@gmail.com','passer', 1, 'admin']);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::delete('delete users where users_id = ?', [1]);
    }
}
