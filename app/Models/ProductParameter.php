<?php

namespace App\Models;

use App\Models\Configuration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductParameter extends Model
{
    // use HasFactory;
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    public function configuration()
    {
        return $this->belongsTo(Configuration::class);
    }
}
