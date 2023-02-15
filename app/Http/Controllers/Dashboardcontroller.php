<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Webproduct;

class Dashboardcontroller extends Controller
{
    function contactus()
    {
        if(Auth::check())
        {
            return view('contact-us');
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }
      function improveseo()
        {
            if(Auth::check())
            {
                return view('improve-seo');
            }
    
            return redirect('login')->with('success', 'you are not allowed to access');
        }

        function discounts()
        {
            if(Auth::check())
            {
                return view('discounts');
            }
    
            return redirect('login')->with('success', 'you are not allowed to access');
        }

        function referfriend()
        {
            if(Auth::check())
            {
                return view('refer-friend');
            }
    
            return redirect('login')->with('success', 'you are not allowed to access');
        }

        public function webhosting()
        {
        $products = Product::orderBy('id', 'asc')->paginate(3);
        return view("web-hosting",compact("products"));
        }
        public function websitedesign()
        {
        $webproducts = WebProduct::orderBy('id', 'asc')->paginate(3);
        return view("website-design",compact("webproducts"));
        }
    
    
    }
