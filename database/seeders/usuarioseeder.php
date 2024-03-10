<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kit_de_roboticaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        DB::table('usuario')->insert([
            'usuarioID'=> 'Admon',
            'correo electronico'=> 'admon@robotics.com',
            'contraseña'=>'Adm@2022 Rol: Administrativo',
            'rol'=>'Administrativo',
            

            'usuarioID'=> 'Tecmilenio',
            'correo electronico'=> 'tecmilenio@robotics.com',
            'contraseña'=>' Adm@2022',
            'rol'=>'Docente',
            

            'usuarioID'=> 'Estudiante',
            'correo electronico'=> 'estudiante@robotics.com',
            'contraseña'=>' Adm@2022',
            'rol'=>'Estudiante'
           
           ]);
    }
}
