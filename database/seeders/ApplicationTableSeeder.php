<?php

namespace Database\Seeders;

use App\Models\Application;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApplicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Application::create([
            'name' => 'Farm Solar',
        ]);

        Application::create([
            'name' => 'Car Charging Solar',
        ]);

        Application::create([
            'name' => 'House Solar',
        ]);
    }
}
