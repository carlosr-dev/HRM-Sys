<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Branch::create([
            'name' =>  'Empresa A'
        ]);

        Branch::create([
            'name' =>  'Empresa B'
        ]);

        Branch::create([
            'name' =>  'Empresa C'
        ]);
    }
}
