<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Solar Panel',
            'slug' => 'solar-panel'
        ]);

        Category::create([
            'name' => 'Campming light',
            'slug' => 'campming-light'
        ]);

        Category::create([
            'name' => 'Solar Flood Light',
            'slug' => 'solar-flood-light'
        ]);

        Category::create([
            'name' => 'Solar Battery',
            'slug' => 'solar-battery'
        ]);

        Category::create([
            'name' => 'Solar System',
            'slug' => 'solar-system'
        ]);
    }
}
