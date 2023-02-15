<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class EditProductController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // check if already exist and returns true or false
        $checker = Product::where('id', $id)->exists();

        if($checker)
        {
            $product = Product::findOrFail($id);// get this employee details
            //returns the page for this route
            session()->put('success', 'Successfully Retrieved!');
            return view('admin.plans.edit_plan', compact('plan'));
        }
        else
        {
            session()->put('error', 'Data Does Not Exist');
            return redirect()->back();
        }

    }

}
