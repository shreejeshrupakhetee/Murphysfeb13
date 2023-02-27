<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Paymentcontroller extends Controller
{
    function invoice()
    {
        if(Auth::check())
        {
            return view('view-purchase');
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }
}
