<?php

namespace App\Http\Controllers\Admin\Purchases;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;

class DeactivatePurchaseController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deactivate($id)
    {
            // check if already exist and returns true or false
            $checker1 =Purchase::where('id', $id)->exists();
            $deactivate_status = 'inactive';

            if ($checker1) {
                $user = Purchase::findOrFail($id);// get this employee details
                $user->status = $deactivate_status;
                $user->save();

                //returns the page for this route
                session()->put('success', 'Successfully Deactivated!');
                return redirect()->back();
            }
            else
            {
                session()->put('error', 'Data Does Not Exist');
                return redirect()->back();
            }

    }

}
