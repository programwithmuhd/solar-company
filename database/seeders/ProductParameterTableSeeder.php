<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use App\Models\ProductParameter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductParameterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 'configuration_id' => 1,
     *
     * @return void
     */
    public function run()
    {
        ProductParameter::create([
            'product_id' => 1,
            'model_name' => 'Solar Panel',
            'desc' => '300 Watt Solar Panel',
            'quantity' => '9pcs',
        ]);
        
        ProductParameter::create([
            'product_id' => 1,
            'model_name' => 'Battery',
            'desc' => '12v 200ah/Gel/Lead Acid',
            'quantity' => '4pcs',
        ]);
        
        ProductParameter::create([
            'product_id' => 1,
            'model_name' => 'Hybrid Inverter',
            'desc' => '5kw EU Standard',
            'quantity' => '1pc',
        ]);

        ProductParameter::create([
            'product_id' => 1,
            'model_name' => 'Battery 5 China',
            'desc' => '5kw EU Standard',
            'quantity' => '1pc',
        ]);

        ProductParameter::create([
            'product_id' => 2,
            'model_name' => 'Inverter Square',
            'desc' => '5kw EU Standard',
            'quantity' => '1pc',
        ]);
    }
}