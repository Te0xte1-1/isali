<?php

namespace Database\Seeders;

use App\Models\Units;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {

            $Units = Units::create([
                'unit_name' => 'وحده امدرمان',
                
            ]);
        }
    }
}
