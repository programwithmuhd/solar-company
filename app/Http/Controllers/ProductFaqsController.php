<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductFaqsController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $faqs = Faq::all();

        return view('product-faqs')->with([
            'product' => $product,
            'categories' => $categories,
            'faqs' => $faqs
        ]);
    }
}
