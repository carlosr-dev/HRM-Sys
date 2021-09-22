<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name' =>  'Dirección General'
        ]);
        
        Department::create([
            'name' =>  'Recursos Humanos'
        ]);

        Department::create([
            'name' =>  'Finanzas'
        ]);

        Department::create([
            'name' =>  'Marketing'
        ]);


        Department::create([
            'name' =>  'Desarrollo'
        ]);
    }
}
