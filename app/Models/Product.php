<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Configuration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function configuration()
    {
        return $this->hasOne(Configuration::class);
    }
}
