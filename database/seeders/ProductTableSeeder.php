<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => '10Kw Solar System',
            'category_id' => 1,
            'model' => 'Solar Panel',
            'slug' => '10Kw-solar-system',
            'details' => 'Whole sale off grid solar power, generation system 5kw 10kw',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat hic eligendi? Corrupti pariatur quam ducimus eveniet nihil modi veritatis voluptatem dolorem? Nobis in, sunt possimus perspiciatis culpa magni vitae animi assumenda illo.',
        ]);
        
        Product::create([
            'name' => 'Solar Flood Light',
            'category_id' => 1,
            'model' => 'Solar Panel',
            'slug' => 'solar-flood-light',
            'details' => '5kw solar energy system. African standard solar system 5k voltage',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat hic eligendi? Corrupti pariatur quam ducimus eveniet nihil modi veritatis voluptatem dolorem? Nobis in, sunt possimus perspiciatis culpa magni vitae animi assumenda illo.',
        ]);
        Product::create([
            'name' => 'Solar Flood Light 300w LYD83000S',
            'category_id' => 1,
            'model' => 'Solar Panel',
            'slug' => 'Solar-Flood-Light300w',
            'details' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat hic eligendi? Corrupti pariatur quam ducimus eveniet nihil modi veritatis voluptatem dolorem? Nobis in, sunt possimus perspiciatis culpa magni vitae animi assumenda illo.',
        ]);
        Product::create([
            'name' => 'Solar Flood Light 300w LYD83000S',
            'category_id' => 1,
            'model' => 'Solar Panel',
            'slug' => 'Solar-Flood-Light300w',
            'details' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat hic eligendi? Corrupti pariatur quam ducimus eveniet nihil modi veritatis voluptatem dolorem? Nobis in, sunt possimus perspiciatis culpa magni vitae animi assumenda illo.',
        ]);
        Product::create([
            'name' => 'Solar Flood Light 200w',
            'category_id' => 1,
            'model' => 'Solar Panel',
            'slug' => 'Solar-Flood-Light200w',
            'details' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat hic eligendi? Corrupti pariatur quam ducimus eveniet nihil modi veritatis voluptatem dolorem? Nobis in, sunt possimus perspiciatis culpa magni vitae animi assumenda illo.',
        ]);
        Product::create([
            'name' => 'Solar Flood Light 150w',
            'category_id' => 1,
            'model' => 'Solar Panel',
            'slug' => 'Solar-Flood-Light150w',
            'details' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat hic eligendi? Corrupti pariatur quam ducimus eveniet nihil modi veritatis voluptatem dolorem? Nobis in, sunt possimus perspiciatis culpa magni vitae animi assumenda illo.',
        ]);
        Product::create([
            'name' => 'Solar Flood Light 100w',
            'category_id' => 1,
            'model' => 'Lightbulb',
            'slug' => 'Solar-Flood-Light100w',
            'details' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat hic eligendi? Corrupti pariatur quam ducimus eveniet nihil modi veritatis voluptatem dolorem? Nobis in, sunt possimus perspiciatis culpa magni vitae animi assumenda illo.',
        ]);
        Product::create([
            'name' => '12V 200ah Solar Battery',
            'category_id' => 1,
            'model' => 'Battery',
            'slug' => '12V-200ah-solar-battery',
            'details' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat hic eligendi? Corrupti pariatur quam ducimus eveniet nihil modi veritatis voluptatem dolorem? Nobis in, sunt possimus perspiciatis culpa magni vitae animi assumenda illo.',
        ]);
        Product::create([
            'name' => '12V 150ah Solar Battery',
            'category_id' => 1,
            'model' => 'Battery',
            'slug' => '12V-150ah-solar-battery',
            'details' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat hic eligendi? Corrupti pariatur quam ducimus eveniet nihil modi veritatis voluptatem dolorem? Nobis in, sunt possimus perspiciatis culpa magni vitae animi assumenda illo.',
        ]);
        Product::create([
            'name' => '12V 100ah Solar Battery',
            'category_id' => 1,
            'model' => 'Battery',
            'slug' => '12V-100ah-solar-battery',
            'details' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat hic eligendi? Corrupti pariatur quam ducimus eveniet nihil modi veritatis voluptatem dolorem? Nobis in, sunt possimus perspiciatis culpa magni vitae animi assumenda illo.',
        ]);
        Product::create([
            'name' => '12V 65ah Solar Battery',
            'category_id' => 1,
            'model' => 'Battery',
            'slug' => '12V-65ah-solar-battery',
            'details' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat hic eligendi? Corrupti pariatur quam ducimus eveniet nihil modi veritatis voluptatem dolorem? Nobis in, sunt possimus perspiciatis culpa magni vitae animi assumenda illo.',
        ]);
        Product::create([
            'name' => 'Shingle Mono 400w Module',
            'category_id' => 1,
            'model' => 'Solar Panel',
            'slug' => 'shingle-mono-400wmodule',
            'details' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat hic eligendi? Corrupti pariatur quam ducimus eveniet nihil modi veritatis voluptatem dolorem? Nobis in, sunt possimus perspiciatis culpa magni vitae animi assumenda illo.',
        ]);
    }
}