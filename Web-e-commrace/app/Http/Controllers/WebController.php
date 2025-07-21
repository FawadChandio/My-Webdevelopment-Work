<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function about()
    {
        return view('Layout.about');
    }

    public function char()
    {
        return view('Layout.char');
    }

    public function category()
    {
        return view('Layout.category');
    }

    public function checkout()
    {
        return view('Layout.checkout');
    }

    public function contact()
    {
        return view('Layout.contact');
    }

    public function home()
    {
        return view('Layout.home');
    }

    public function order()
    {
        return view('Layout.order');
    }

    public function quickView()
    {
        return view('Layout.quick_view');
    }

    public function searchPage()
    {
        return view('Layout.search_page');
    }

    public function shop()
    {
        return view('Layout.shop');
    }

    public function update()
    {
        return view('Layout.update');
    }

    public function userLogin()
    {
        return view('Layout.user_login');
    }

    public function userRegister()
    {
        return view('Layout.user_register');
    }

    public function wishlist()
    {
        return view('Layout.wishlist');
    }
    public function index()
    {
        // Fetch the latest 6 products from the 'products' table
        $products = DB::table('products')->limit(6)->get();

        // Return the 'home' view and pass the products to it
        return view('Layout.home', compact('products'));
    }
}
