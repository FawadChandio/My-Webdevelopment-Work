<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminAccounts()
    {
        return view('admin_accounts');
    }

    public function adminLogin()
    {
        return view('admin_login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function messages()
    {
        return view('messages');
    }

    public function placedOrders()
    {
        return view('placed_orders');
    }

    public function products()
    {
        return view('products');
    }

    public function registerAdmin()
    {
        return view('register_admin');
    }

    public function updateProduct()
    {
        return view('update_product');
    }

    public function updateProfile()
    {
        return view('update_profile');
    }

    public function usersAccounts()
    {
        return view('users_accounts');
    }
}
