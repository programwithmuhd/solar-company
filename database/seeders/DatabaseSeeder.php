<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductTableSeeder;
use Database\Seeders\CategoryTableSeeder;
use Database\Seeders\ConfigParamsTableSeeder;
use Database\Seeders\ConfigurationsTableSeeder;
use Database\Seeders\ProductParameterTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            CategoryTableSeeder::class,
            ProductTableSeeder::class,
            ConfigurationsTableSeeder::class,
            ConfigParamsTableSeeder::class,
            ProductParameterTableSeeder::class,
            ApplicationTableSeeder::class,
        ]);
    }
}