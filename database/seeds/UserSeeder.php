<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    private function randDate()
	{
		return Carbon::createFromDate(null, rand(1, 12), rand(1, 28));
	}

    private function insertAdmin(){
        $i = 1;


        $date = $this->randDate();
        DB::table('users')->insert([
            'users_id' => $i,
            'prenom' => 'Richard',
            'nom' => 'Ndiaye',
            'telephone' =>'7820123'.$i,
            'adresse' => 'Dieupeul',
            'email' => 'richard' . $i . '@gmail.com',
            'password' => bcrypt('passer'),
            'statut' => 1,
            'profil' => 'admin',
            'created_at' => $date,
            'updated_at' => $date
        ]);



        $date = $this->randDate();
        DB::table('admin')->insert([
            'users_id' => $i,
            'created_at' => $date,
            'updated_at' => $date
        ]);
    
    }

    private function insertGerant(){
        $i = 2;
        

        $date = $this->randDate();
        DB::table('users')->insert([
            'users_id' => $i,
            'prenom' => 'Antoine',
            'nom' => 'Diouf',
            'telephone' =>'7820123'.$i,
            'adresse' => 'Malika',
            'email' => 'antoine' . $i . '@gmail.com',
            'password' => bcrypt('passer'),
            'statut' => 1,
            'profil' => 'gerant',
            'created_at' => $date,
            'updated_at' => $date
        ]);



        $date = $this->randDate();
        DB::table('gerants')->insert([
            'users_id' => $i,
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gerants')->delete();

        DB::table('admin')->delete();

        DB::table('users')->delete();

        $this->insertAdmin();
        $this->insertGerant();
    }
}
