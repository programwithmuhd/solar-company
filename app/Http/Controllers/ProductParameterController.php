<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Configuration;
use App\Models\ProductParameter;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Adapters\Phpunit\ConfigureIO;

class ProductParameterController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $configurationName = Configuration::where('product_id', $id)->firstOrFail();
        $productParam = ProductParameter::where('product_id', $id)->get();

        return view('product-parameter')->with([
            'product' => $product,
            'categories' => $categories,
            'configurationName' => $configurationName,
            'productParam' => $productParam,
        ]);
    }
}
