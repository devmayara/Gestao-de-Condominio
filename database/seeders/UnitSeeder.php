<?php

namespace Database\Seeders;

use App\Models\Unit;
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
        Unit::create([
            'name' => 'lot 43'
        ]);
        Unit::create([
            'name' => 'lot 44'
        ]);
        Unit::create([
            'name' => 'lot 45'
        ]);
        Unit::create([
            'name' => 'lot 46'
        ]);
        Unit::create([
            'name' => 'lot 47'
        ]);
    }
}
