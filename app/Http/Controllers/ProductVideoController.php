<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class ProductVideoController extends Controller
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
        $productVideo = Video::where('product_id', $id)->first(); 

        return view('product-video')->with([
            'product' => $product,
            'categories' => $categories,
            'productVideo' => $productVideo
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('product-video')->with([
            'product' => $product,
            'categories' => $categories,
        ]);
    }
}
