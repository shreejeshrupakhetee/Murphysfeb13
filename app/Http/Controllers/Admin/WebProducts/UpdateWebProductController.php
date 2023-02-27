<?php

namespace App\Http\Controllers\Admin\WebProducts;

use App\Http\Controllers\Controller;
use App\Models\WebProduct;
use App\User;
use Illuminate\Http\Request;

class UpdateWebProductController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validates fields in form
        $request->validate([
            'name' => 'required|min:3|max:20',
            'description1' => 'required|min:20|max:200',
            'price' => 'required|min:1|max:3',
            
        ]);

        // store user input
        $user = WebProduct::find($id);
        $user->name = $request->Input(['name']);
        $user->description1 = $request->Input(['description1']);
        $user->price = $request->Input(['price']);
        $saved = $user->save();

        // check if value is saved
        if($saved)
        {
            session()->put('success', 'Successfully Created!');
            return redirect()->route('admin.webproducts.list');
        }
        else
        {
            //the else part
            session()->put('error', 'There was an error creating this data!');
            return redirect()->route('admin.webproducts.list');
        }

    }

}
