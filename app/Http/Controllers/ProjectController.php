<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;

class ProjectController extends Controller
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

        return view('solar-projects')->with([
            'projects' => $projects,
            'categories' => $categories
        ]);
    }

    
    public function show($id)
    {
        $categories = Category::inRandomOrder()->take(5)->get();

        $project = Project::findOrFail($id);

        return view('solar-project', compact(['categories', 'project']));
    }
}
