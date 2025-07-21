<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;

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

// Route for the home page
Route::get('/', [PageController::class, 'home'])->name('home');

// Route for the about page
Route::get('/about-us', [PageController::class, 'about'])->name('about');

// Route for the services page
Route::get('/services', [PageController::class, 'services'])->name('services');

// Route for the blog page
Route::get('/blog', [BlogController::class, 'blog'])->name('blog'); // Show blog posts
Route::get('/admin/create-blog', [BlogController::class, 'createBlogForm'])->name('createBlogForm'); // Show blog upload form
Route::post('/admin/upload-blog', [BlogController::class, 'createBlogPost'])->name('createBlogPost'); // Handle blog post upload

// Route for the contact page
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Route::get('/page', [PageController::class, 'page'])->name('');

