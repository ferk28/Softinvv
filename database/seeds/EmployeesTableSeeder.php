<?php

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create(["name"=>"Fernando","controlnum"=>"12345","status"=>"Alta","boss_id"=>"1"]);
    }
}
