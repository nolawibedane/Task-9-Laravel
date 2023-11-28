<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return '<h1>About the Blog</h1>
            <p>This blog is a platform to share insights and ideas about the latest trends in technology, coding, and web development. Here you will find articles, tutorials, and resources to help you stay up to date with the industry.</p>';
});

Route::get('/greet', function (){
    return view('greeting', ['name'=>'Kabelo']);
    });

  // Import the BlogController class at the top of the routes file.
use App\Http\Controllers\BlogController;

// Define a GET route for individual blog posts with a parameter 'id'.
// The 'id' in the URL will correspond to the ID of the blog post in the database.
Route::get('/blog/{id}', [BlogController::class, 'show']);
// The array passed to the second argument of Route::get specifies the controller and method to handle this route.
// When the '/blog/{id}' URL is accessed, the 'show' method of the BlogController is called, passing in the 'id' as a parameter.
