<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;
use App\Models\CompanyValue;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Cache;

class PageController extends Controller
{
    // Show the home page
    public function home() {
        return view('Layout.home');
    }

    // Show the about page with team members and company values
    public function about() {
        $teamMembers = Cache::remember('team_members', 60, function () {
            return TeamMember::all();
        });

        $values = Cache::remember('company_values', 60, function () {
            return CompanyValue::all();
        });

        return view('Layout.about', compact('teamMembers', 'values'));
    }

    // Show the services page
    public function services() {
        return view('Layout.services');
    }

    // Show the blog page with paginated posts
    public function blog()
    {
        // Caching the blog posts for better performance
        $posts = Cache::remember('blog_posts', 60, function () {
            return BlogPost::orderBy('created_at', 'desc')->paginate(10); // Get 10 most recent posts per page
        });
    
        // Return the blog view with the posts
        return view('Layout.blog', compact('posts'));
    }
    // Show the contact page
    public function contact() {
        return view('Layout.contact');
    }

    public function page()
    {
        // This function seems unnecessary as 'blog' already handles pagination
        // If you intend to have a separate page, you may implement it differently
        // $posts = BlogPost::paginate(10); // 10 posts per page

        // return view('page', compact('posts')); // Make sure the view name matches
    }
}
