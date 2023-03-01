<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DeleteProductController extends Controller
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
        $product = Product::find($id);
        $delete = $product->delete(); //delete the client
        if($delete)
        {
            session()->put('success', 'Successfully Deleted!');
            return redirect()->route('admin.products.list');
        }
        else
        {
            session()->put('error', 'There was an error deleting this data!');
            return redirect()->back();
        }
    }

}
