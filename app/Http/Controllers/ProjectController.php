<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return Inertia::render('Projects/Index', [
            'projects' => $projects
        ]);
    }
}
