<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowProductController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // check if already exist and returns true or false
        $checker = Product::where('id', $id)->exists();

        if($checker)
        {
            $product = Product::findOrFail($id);

            //returns the page for this route
            session()->put('success', 'Successfully Retrieved!');
            return view('admin.plans.view_plan', compact('product'));
        }
        else
        {
            session()->put('error', 'Data Does Not Exist');
            return redirect()->back();
        }

    }

}
