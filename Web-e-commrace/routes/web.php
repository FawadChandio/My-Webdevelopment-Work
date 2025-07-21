<?php
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome')
    Route::get('/about', [WebController::class, 'about']);
    Route::get('/char', [WebController::class, 'char']);
    Route::get('/category', [WebController::class, 'category']);
    Route::get('/checkout', [WebController::class, 'checkout']);
    Route::get('/contact', [WebController::class, 'contact']);
    Route::get('/', [WebController::class, 'home']); // Home route
    Route::get('/order', [WebController::class, 'order']);
    Route::get('/quick-view', [WebController::class, 'quickView']);
    Route::get('/search', [WebController::class, 'searchPage']);
    Route::get('/shop', [WebController::class, 'shop']);
    Route::get('/update', [WebController::class, 'update']);
    Route::get('/login', [WebController::class, 'userLogin']);
    Route::get('/register', [WebController::class, 'userRegister']);
    Route::get('/wishlist', [WebController::class, 'wishlist']);
    Route::get('/', [WebController::class, 'index']); 


    Route::get('/admin-accounts', [AdminController::class, 'adminAccounts']);
    Route::get('/admin-login', [AdminController::class, 'adminLogin']);
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/messages', [AdminController::class, 'messages']);
    Route::get('/placed-orders', [AdminController::class, 'placedOrders']);
    Route::get('/products', [AdminController::class, 'products']);
    Route::get('/register-admin', [AdminController::class, 'registerAdmin']);
    Route::get('/update-product', [AdminController::class, 'updateProduct']);
    Route::get('/update-profile', [AdminController::class, 'updateProfile']);
    Route::get('/users-accounts', [AdminController::class, 'usersAccounts']);
    