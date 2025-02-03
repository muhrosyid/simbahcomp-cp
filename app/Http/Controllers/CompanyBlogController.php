<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\CompanyBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class CompanyBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogs = CompanyBlog::orderByDesc('id')->paginate(1);
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(StoreBlogRequest $request)
    {
        //
        DB::transaction(function() use($request) {
            $validated = $request->validated();

            if($request->hasFile('thumbnail')){
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }
            
            $newBlog = CompanyBlog::create($validated);
        });

        return redirect()->route('admin.blogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyBlog $companyBlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyBlog $blog)
    {
        //
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, CompanyBlog $blog)
    {
        //
        DB::transaction(function() use($request, $blog) {
            $validated = $request->validated();

            if($request->hasFile('thumbnail')){
                $thumbnailPath = $request->file('thumbnail')->store('thumbnail', 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }
            
            $blog->update($validated);
        });

        return redirect()->route('admin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyBlog $blog)
    {
        //
        DB::transaction(function() use($blog) {
            $blog->delete();
        });

        return redirect()->route('admin.blogs.index');
    }
}
