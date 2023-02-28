<?php

namespace App\Http\Controllers\Admin\WebProducts;

use App\Http\Controllers\Controller;
use App\Models\Webproduct;
use Illuminate\Http\Request;

class ListWebProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // returns the list view
        $webproducts = Webproduct::orderBy('id', 'asc')->paginate(3);//returns db value in descending order with pagination
        return view('admin.webproducts.list_webproducts', compact('webproducts'));
    }

}
