<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use Illuminate\Support\Facades\Pipeline;
use App\Models\Blog;
use App\Pipelines\Filters\BySearch;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function index(Request $request)
    {


        $pipelines = [
            new BySearch($request->input('search')),
        ];
        $blogs = Pipeline::send(Blog::latest())
            ->through($pipelines)->thenReturn();

        return Inertia::render('Home', [
            'blogs' => BlogResource::collection(
                $blogs->paginate(8)
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
