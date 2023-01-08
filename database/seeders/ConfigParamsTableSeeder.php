<?php

namespace Database\Seeders;

use App\Models\ConfigParam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigParamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ConfigParam::create([
            'product_id' => 1,
            'configuration_id' => 1,
        ]);

        ConfigParam::create([
            'product_id' => 2,
            'configuration_id' => 1,
        ]);

        ConfigParam::create([
            'product_id' => 3,
            'configuration_id' => 2,
        ]);

        ConfigParam::create([
            'product_id' => 4,
            'configuration_id' => 3,
        ]);

        ConfigParam::create([
            'product_id' => 5,
            'configuration_id' => 2,
        ]);

        ConfigParam::create([
            'product_id' => 6,
            'configuration_id' => 2,
        ]);
        ConfigParam::create([
            'product_id' => 7,
            'configuration_id' => 2,
        ]);
    }
}
