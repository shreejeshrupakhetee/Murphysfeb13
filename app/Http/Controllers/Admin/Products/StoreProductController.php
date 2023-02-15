<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreProductController extends Controller
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
            'name' => 'required|min:3|max:20|unique:plans',
            'description1' => 'required|min:20|max:200',
            'price' => 'required|min:1|max:3',     
        ]);

        // store user input
        $user = new Product();
        $user->name = $request->Input(['name']);
        $user->description1 = $request->Input(['description1']);
        $user->price = $request->Input(['price']);
        $saved = $user->save();

        // check if value is saved
        if($saved)
        {
            session()->put('success', 'Successfully Created!');
            return redirect()->route('admin.plan.create');
        }
        else
        {
            //the else part
            session()->put('error', 'There was an error creating this data!');
            return redirect()->route('admin.plan.create');
        }

    }

}
