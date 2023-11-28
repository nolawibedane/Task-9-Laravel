<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import the BlogPost model directly so you don't need to refer to it with its full namespace later.
use App\Models\BlogPost;

// Define the BlogController within the App\Http\Controllers namespace.
class BlogController extends Controller
{
    // Define the show method which is responsible for displaying a single blog post.
    // The $id parameter will be the unique identifier for the blog post.
    public function show($id)
    {
        // Use the BlogPost model to find the blog post by its ID.
        // The findOrFail method will return the blog post if it exists or throw a 404 error if it does not.
        $blogPost = BlogPost::findOrFail($id);

        // Return the 'blog.show' view with the blog post data.
        // The 'blogPost' variable will be accessible in the view.
        return view('blog.show', ['blogPost' => $blogPost]);
    }
}
