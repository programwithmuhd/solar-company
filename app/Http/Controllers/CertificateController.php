<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::all();
        $certicates = Certificate::all();
        $product = Product::where('id', $id)->first();

        return view('certificates')->with([
            'certificates' => $certicates,
            'product' => $product,
            'categories' => $categories,
        ]);
    }
}
