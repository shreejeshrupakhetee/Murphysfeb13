<?php

namespace App\Http\Controllers\Admin\WebProducts;

use App\Http\Controllers\Controller;
use App\Models\WebProduct;
use Illuminate\Http\Request;

class ShowWebProductController extends Controller
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
        $checker = WebProduct::where('id', $id)->exists();

        if($checker)
        {
            $webproduct = WebProduct::findOrFail($id);

            //returns the page for this route
            session()->put('success', 'Successfully Retrieved!');
            return view('admin.plans.view_plan', compact('webproduct'));
        }
        else
        {
            session()->put('error', 'Data Does Not Exist');
            return redirect()->back();
        }

    }

}
