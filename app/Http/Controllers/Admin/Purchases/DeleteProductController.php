<?php

namespace App\Http\Controllers\Admin\Purchases;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;

class DeletePurchaseController extends Controller
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
        $purchase = Purchase::find($id);
        $delete = $purchase->delete(); //delete the client
        if($delete)
        {
            session()->put('success', 'Successfully Deleted!');
            return redirect()->route('admin.subscriptions.list');
        }
        else
        {
            session()->put('error', 'There was an error deleting this data!');
            return redirect()->back();
        }

    }

}
