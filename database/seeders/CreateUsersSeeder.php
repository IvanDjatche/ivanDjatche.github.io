<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [

            [
                'Nom' => 'Djatche',
                'Prenom' => 'ivan',
                'Telephone' => '694573929',
                'Ville' => 'Douala',
                'Adresse' => 'ivan',
                'DateNaiss' => 1999/06/02,
                'email' => 'ivandjatche@gmail.com',
                'Role' => 'admin',
                'password' => bcrypt('ivan1999'),

            ],
        
           
        ];

        foreach($users as $Key => $user)
        {
           User::create($user);
        }
    }
}
