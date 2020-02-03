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
            ['name' => 'Administracion'],
            ['name' => 'Direccion General'],
            ['name' => 'Ventas - Grupos y Convenciones'],
            ['name' => 'Finanzas'],
            ['name' => 'Condominios'],
            ['name' => 'Recursos Humanos'],
            ['name' => 'Capacitacion'],
            ['name' => 'Maestra de Ingles'],
            ['name' => 'Sistemas'],
            ['name' => 'Contabilidad Club Vacacional'],
            ['name' => 'Contratos'],
            ['name' => 'Mercadotecnia'],
            ['name' => 'Atencion a Socios'],
            ['name' => 'Fly & Buy'],
            ['name' => 'Reservaciones Socios & RCI'],
            ['name' => 'Recepcion'],
            ['name' => 'Servicio a Huespedes'],
            ['name' => 'Telefonos'],
            ['name' => 'Bell Boys'],
            ['name' => 'Agencia de Viajes'],
            ['name' => 'Arrendadora'],
            ['name' => 'Kids Club'],
            ['name' => 'SPA'],
            ['name' => 'Boutique'],
            ['name' => 'Minisuper'],
            ['name' => 'Lavanderia'],
            ['name' => 'Seguridad'],
            ['name' => 'Mantenimiento'],
            ['name' => 'Intendencia'],
            ['name' => 'Jardines'],
            ['name' => 'Ama de llaves'],
            ['name' => 'Sala de Ventas'],
            ['name' => 'Hostes Club Vacacional'],
            ['name' => 'Actividades'],
            ['name' => 'Alimentos y bebidas'],
            ['name' => 'Restaurant'],
            ['name' => 'Servibar'],
            ['name' => 'Emergencia'], 
        ]);
    }
}
