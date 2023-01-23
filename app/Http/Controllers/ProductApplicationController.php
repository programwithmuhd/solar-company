<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductApplicationController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $applications = Application::paginate(10);

        return view('product-application')->with([
            'product' => $product,
            'categories' => $categories,
            'applications' => $applications
        ]);
    }
}
