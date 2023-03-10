<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::inRandomOrder()->take(5)->get();
        
        $projects = Project::all();

        $products = Product::inRandomOrder()->take(8)->get();
        return view('landing-page')->with([
            'products' => $products,
            'projects' => $projects,
            'categories' => $categories
        ]);
    }
}
