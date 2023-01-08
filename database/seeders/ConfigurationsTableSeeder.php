<?php

namespace Database\Seeders;

use App\Models\Configuration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::create([
            'product_id' => 1,
            'name' => '5KW OFFGRID SOLAR SYSTEM CONFIGURATION',
        ]);
        Configuration::create([
            'product_id' => 2,
            'name' => '15KW OFFGRID SOLAR SYSTEM CONFIGURATION',
        ]);
        Configuration::create([
            'product_id' => 3,
            'name' => '25KW OFFGRID SOLAR SYSTEM CONFIGURATION',
        ]);
        Configuration::create([
            'product_id' => 4,
            'name' => '25KW OFFGRID SOLAR SYSTEM CONFIGURATION',
        ]);
        Configuration::create([
            'product_id' => 5,
            'name' => '25KW OFFGRID SOLAR SYSTEM CONFIGURATION',
        ]);
    }
}
