<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return Inertia::render('Home', [
            'blogs' => $blogs
        ]);
    }
    public function show(Blog $blog)
    {
        return Inertia::render('Blogs/Show', [
            'blog' => $blog
        ]);
    }
}
