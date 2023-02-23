<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Notifications\WelcomeEmailNotification;

class SampleController extends Controller
{
    function index()
    {
        return view('login');
    }

    function registration()
    {
        return view('registration');
    }

    function forgotpassword()
    {
        return view('forgotpassword');
    }

    function validate_registration(Request $request)
    {
        $request->validate([
            'firstname'         =>   'required',
            'lastname'         =>   'required',
            'email'        =>   'required|email|unique:users',
            'password'     =>   'required|min:6',
            'phone'        =>   'required',
            'companyname',
            'taxid',
            'streetaddress1'=> 'required',
            'streetaddress2',
            'city'=>'required',
            'state'=>'required',
            'postcode'=>'required',
            'surveyinfo',
            'currencyname'
        ]);

        $data = $request->all();

        $user=User::create([
            'firstname'  =>  $data['firstname'],
            'lastname'  =>  $data['lastname'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password']),
            'phone'=>$data['phone'],
            'companyname'=>$data['companyname'],
            'taxid'=>$data['taxid'],
            'streetaddress1'=>$data['streetaddress1'],
            'streetaddress2'=>$data['streetaddress2'],
            'city'=>$data['city'],
            'state'=>$data['state'],
            'postcode'=>$data['postcode'],
            'surveyinfo'=>$data['surveyinfo'],
            'currencyname'=>$data['currencyname']

        ]); 
        $user->notify(new WelcomeEmailNotification($user));
        return redirect('login')->with('success', 'Registration Completed, now you can login');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {   
            if (auth()->user()->is_admin== 1) {
                return view('adminhome');
            }
            else
            {
                return view('home');
            }
        }else{
            return view('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }

    function dashboard()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }
}
