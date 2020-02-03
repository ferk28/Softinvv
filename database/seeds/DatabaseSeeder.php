<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Function factory
        // $this->truncateTables([ 
        //     "users",
            
        // ]);
        $this->call(UsersTableSeeder::class);
        $this->call(AreasTableSeeder::class); //run php artisan db:seed
        $this->call(BossesTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
    }
    public function truncateTables(array $tables){
        foreach ($tables as $table) {
            DB::statement('SET FOREIGN_KEY_CHEKS=0');
            DB::table($table)->truncate();
            DB::statement('SET FOREIGN_KEY_CHEKS=1');
        }
    }
}
