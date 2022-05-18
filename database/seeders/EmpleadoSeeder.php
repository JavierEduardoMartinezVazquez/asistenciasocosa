<?php

namespace Database\Seeders;

use App\Models\Empleado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empleado = new Empleado();
        $empleado->nombres="Javier";
        $empleado->apellidopat="Martinez";
        $empleado->apellidomat="Vazquez";

        $empleado->save();

        $empleado2 = new Empleado();
        $empleado2->nombres="Javier";
        $empleado2->apellidopat="Martinez";
        $empleado2->apellidomat="Vazquez";

        $empleado2->save();

        $empleado3 = new Empleado();
        $empleado3->nombres="Javier";
        $empleado3->apellidopat="Martinez";
        $empleado3->apellidomat="Vazquez";

        $empleado3->save();
        
    }
}
