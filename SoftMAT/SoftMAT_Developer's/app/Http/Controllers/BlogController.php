<?php
namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Display blog posts
    public function blog()
    {
        $posts = BlogPost::paginate(10); // Get 10 posts per page
        return view('Layout.blog', compact('posts'));
    }

    // Show the form for creating a new blog post
    public function createBlogForm()
    {
        return view('admin.create-blog');
    }

    // Store a newly created blog post
    public function createBlogPost(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle the image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog_images', 'public');
        }

        // Create the blog post
        BlogPost::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'image' => $imagePath,
        ]);

        return redirect()->route('blog')->with('success', 'Blog post uploaded successfully!');
    }
}
