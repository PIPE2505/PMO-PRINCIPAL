<?php

use Illuminate\Database\Seeder;
use App\user;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //usuario con el rol ingeniero

        $ingeniero=User::create([
        	'name'=>'ingeniero',
        	'email'=>'ingeniero@gmail.com',
        	'password'=> bcrypt('123456789');		
        ]);

        $ingeniero->asingRole('ingeniero')

        //usuario con el rol moderador

        $administrador=User::create([
        	'name'=>'moderador',
        	'email'=>'moderador@gmail.com',
        	'password'=> bcrypt('123456789');		
        ]);

        $administrador->asingRole('administrador')

        //usuario con el rol ingeniero

        $lider=User::create([
        	'name'=>'lider',
        	'email'=>'lider@gmail.com',
        	'password'=> bcrypt('123456789');		
        ]);

        $lider->asingRole('lider')

    }
}
