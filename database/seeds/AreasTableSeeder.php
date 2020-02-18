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
            ['name' => 'Administracion', 'user_id'=>'1'],
            ['name' => 'Direccion General', 'user_id'=>'1'],
            ['name' => 'Ventas - Grupos y Convenciones', 'user_id'=>'1'],
            ['name' => 'Finanzas', 'user_id'=>'1'],
            ['name' => 'Condominios', 'user_id'=>'1'],
            ['name' => 'Recursos Humanos', 'user_id'=>'1'],
            ['name' => 'Capacitacion', 'user_id'=>'1'],
            ['name' => 'Maestra de Ingles', 'user_id'=>'1'],
            ['name' => 'Sistemas', 'user_id'=>'1'],
            ['name' => 'Contabilidad Club Vacacional', 'user_id'=>'1'],
            ['name' => 'Contratos', 'user_id'=>'1'],
            ['name' => 'Mercadotecnia', 'user_id'=>'1'],
            ['name' => 'Atencion a Socios', 'user_id'=>'1'],
            ['name' => 'Fly & Buy', 'user_id'=>'1'],
            ['name' => 'Reservaciones Socios & RCI', 'user_id'=>'1'],
            ['name' => 'Recepcion', 'user_id'=>'1'],
            ['name' => 'Servicio a Huespedes', 'user_id'=>'1'],
            ['name' => 'Telefonos', 'user_id'=>'1'],
            ['name' => 'Bell Boys', 'user_id'=>'1'],
            ['name' => 'Agencia de Viajes', 'user_id'=>'1'],
            ['name' => 'Arrendadora', 'user_id'=>'1'],
            ['name' => 'Kids Club', 'user_id'=>'1'],
            ['name' => 'SPA', 'user_id'=>'1'],
            ['name' => 'Boutique', 'user_id'=>'1'],
            ['name' => 'Minisuper', 'user_id'=>'1'],
            ['name' => 'Lavanderia', 'user_id'=>'1'],
            ['name' => 'Seguridad', 'user_id'=>'1'],
            ['name' => 'Mantenimiento', 'user_id'=>'1'],
            ['name' => 'Intendencia', 'user_id'=>'1'],
            ['name' => 'Jardines', 'user_id'=>'1'],
            ['name' => 'Ama de llaves', 'user_id'=>'1'],
            ['name' => 'Sala de Ventas', 'user_id'=>'1'],
            ['name' => 'Hostes Club Vacacional', 'user_id'=>'1'],
            ['name' => 'Actividades', 'user_id'=>'1'],
            ['name' => 'Alimentos y bebidas', 'user_id'=>'1'],
            ['name' => 'Restaurant', 'user_id'=>'1'],
            ['name' => 'Servibar', 'user_id'=>'1'],
            ['name' => 'Emergencia', 'user_id'=>'1'],
        ]);
    }
}
