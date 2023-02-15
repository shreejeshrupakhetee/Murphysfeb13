<?php

namespace App\Http\Controllers\Admin\Purchases;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;

class ListSubscriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // returns the list view
        $purchase = Purchase::orderBy('id', 'asc')->paginate(3);//returns db value in descending order with pagination
        return view('admin.subscriptions.list_subscriptions', compact('purchases'));
    }

}
