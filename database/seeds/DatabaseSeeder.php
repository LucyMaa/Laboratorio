<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Extension\Table\Table;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('personas')->insert([
            'id'=>'777',
            'apellido'=>'vargas ortiz',
            'ci' =>'8997209',
            'nombre'=>'andres',
            'direccion'=>'URB. las madres',
            'telefono'=>'7548721',
            'fechaNacimiento'=>'2001-09-28',
            'sexo'=>'MASCULINO'
        ]);




        DB::table('usuarios')->insert([
            'email' => 'C@gmail.com',
            'password' => Hash::make('12345'),
            'idPersona'=>'777'
        ]);
    }
    
}
