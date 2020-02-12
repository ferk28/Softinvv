<?php

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            ['name_area' => 'Administracion'],
            ['name_area' => 'Direccion General'],
            ['name_area' => 'Ventas - Grupos y Convenciones'],
            ['name_area' => 'Finanzas'],
            ['name_area' => 'Condominios'],
            ['name_area' => 'Recursos Humanos'],
            ['name_area' => 'Capacitacion'],
            ['name_area' => 'Maestra de Ingles'],
            ['name_area' => 'Sistemas'],
            ['name_area' => 'Contabilidad Club Vacacional'],
            ['name_area' => 'Contratos'],
            ['name_area' => 'Mercadotecnia'],
            ['name_area' => 'Atencion a Socios'],
            ['name_area' => 'Fly & Buy'],
            ['name_area' => 'Reservaciones Socios & RCI'],
            ['name_area' => 'Recepcion'],
            ['name_area' => 'Servicio a Huespedes'],
            ['name_area' => 'Telefonos'],
            ['name_area' => 'Bell Boys'],
            ['name_area' => 'Agencia de Viajes'],
            ['name_area' => 'Arrendadora'],
            ['name_area' => 'Kids Club'],
            ['name_area' => 'SPA'],
            ['name_area' => 'Boutique'],
            ['name_area' => 'Minisuper'],
            ['name_area' => 'Lavanderia'],
            ['name_area' => 'Seguridad'],
            ['name_area' => 'Mantenimiento'],
            ['name_area' => 'Intendencia'],
            ['name_area' => 'Jardines'],
            ['name_area' => 'Ama de llaves'],
            ['name_area' => 'Sala de Ventas'],
            ['name_area' => 'Hostes Club Vacacional'],
            ['name_area' => 'Actividades'],
            ['name_area' => 'Alimentos y bebidas'],
            ['name_area' => 'Restaurant'],
            ['name_area' => 'Servibar'],
            ['name_area' => 'Emergencia'], 
        ]);
    }
}
