<?php

namespace App\Http\Controllers;

use view;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        if (request()->category) {
            $products = Product::with('category')->whereHas('category', function($query) {
                $query->where('slug', request()->category);
            })->paginate(8);
            $categories = Category::all();
            $categoryName = $categories->where('slug', request()->category)->first()->name;

        } else {
            $products = Product::latest()->paginate(8);
            $categories = Category::all();
            $categoryName = 'All Products';
        }

        return view('products')->with([
            'categories' => $categories,
            'products' => $products,
            'categoryName' => $categoryName
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        // $product = Product::where('id', $id)->first();

        $categories = Category::all();

        return view('product')->with([
            'categories' => $categories,
            'product' => $product
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function search(Request $request)
    {
        $categories = Category::inRandomOrder()->take(5)->get();

        $query = $request->input('query');

        $products = Product::where('name', 'like', "%$query%")
                            ->orWhere('details', 'like', "%$query%")
                            ->orWhere('description', 'like', "%$query%")
                            ->paginate(8);

        return view('search-results', compact(['products', 'categories']));
    }
}
