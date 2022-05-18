<?php

namespace Database\Seeders;

use App\Models\Asistencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsistenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $asistencia = new Asistencia();
        $asistencia->nombrea="Javi";
        $asistencia->sucursal="SocasaToluca";
        $asistencia->puesto="Sistemas";

        $asistencia->save();
    }
}
