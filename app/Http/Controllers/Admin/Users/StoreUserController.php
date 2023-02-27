<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StoreUserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validates fields in form
        $this->validate($request,[
            'firstname' => 'required|min:3|max:20',
            'lastname' => 'required|min:3|max:20',
            'email' => 'required|min:7|max:50|unique:users',
            'streetaddress1' => 'required|min:3|max:20',
            'password' => 'required|min:3|max:20|confirmed',
            'status' => 'required|min:6|max:9',
        ]);

        // store user input
        $user = new User();
        $user->name = $request->Input(['firstname']);
        $user->name = $request->Input(['lastname']);
        $user->email = $request->Input(['email']);
        $user->name = $request->Input(['streetaddress1']);
        $user->password = Hash::make($request->Input(['password']));
        $user->status = $request->Input(['status']);
        $saved = $user->save();

        // check if value is saved
        if($saved)
        {
            session()->put('success', 'Successfully Created!');
            return redirect()->route('admin.user.create');
        }
        else
        {
            //the else part
            session()->put('error', 'There was an error creating this data!');
            return redirect()->route('admin.user.create');
        }

    }

}
