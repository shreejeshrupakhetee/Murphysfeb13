<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use App\Models\Webproduct;
use App\Models\Purchase;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $users = User::count();// counts total users
        $purchases = Purchase::count();// counts total purchase
        $products = Product::count();// counts total plans of web-host
        $webproducts = WebProduct::count();// counts total web-development

        return view('admin.adminhome',compact('users','purchases', 'products','webproducts'));
    }
}
