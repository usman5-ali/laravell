<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    public function store(Request $request)
    {
        // Validate inputs
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
        }

        // Save blog
        Blog::create([
            'title' => $request->title,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('blogs.fetch')->with('success', 'Blog created successfully.');
    }
    public function latest()
    {
        // Validate inputs
        $blogs = Blog::latest()->take(3)->get();
        return response()->json($blogs)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
    }
    public function fetch()
    {
        // Validate inputs
        $blogs = Blog::latest()->get();
        return view('blog-listing', compact('blogs'));
    }
    public function fetchall()
    {
        // Validate inputs
        $blogs = Blog::latest()->get();
        return $blogs;
    }
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blogs.fetch')->with('success', 'Blog deleted successfully.');
    }
    public function show($id)
    {
        // Find the blog by ID or return 404
        $blog = Blog::findOrFail($id);

        // Return a view and pass the blog data to it
        return view('blog-show', compact('blog'));
    }
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog-edit', compact('blog'));
    }
    public function update(Request $request, $id)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $blog = Blog::findOrFail($id);
            $blog->title = $request->title;
            $blog->description = $request->description;

            // Handle image upload if a new one is provided
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads'), $imageName);
                $blog->image = $imageName;
            }

            $blog->save();

            return redirect()->route('blogs.fetch')->with('success', 'Blog updated successfully.');
        }

}
