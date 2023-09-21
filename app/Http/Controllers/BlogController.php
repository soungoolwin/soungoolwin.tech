<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function index()
    {

        return Inertia::render('Home', [
            'blogs' => BlogResource::collection(
                Blog::latest()->paginate(8)
            )
        ]);
    }
    public function show(Blog $blog)
    {
        return Inertia::render('Blogs/Show', [
            'blog' => $blog
        ]);
    }
}
