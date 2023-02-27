<?php

namespace App\Http\Controllers\Admin\WebProducts;

use App\Http\Controllers\Controller;
use App\Models\WebProduct;
use Illuminate\Http\Request;

class DeleteWebProductController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // deletes data using id
        $webproduct = WebProduct::find($id);
        $delete = $webproduct->delete(); //delete the client
        if($delete)
        {
            session()->put('success', 'Successfully Deleted!');
            return redirect()->route('admin.plans.list');
        }
        else
        {
            session()->put('error', 'There was an error deleting this data!');
            return redirect()->back();
        }
    }

}
