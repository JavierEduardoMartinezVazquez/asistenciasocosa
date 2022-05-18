<?php

namespace Database\Seeders;


use App\Models\Inasistencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InasistenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empleadoin = new Inasistencia();
        $empleadoin->nombrein="Javier";
        $empleadoin->sucursalin="Xona";
        $empleadoin->puestoin="Contador";
        $empleadoin->save();
    }
}
