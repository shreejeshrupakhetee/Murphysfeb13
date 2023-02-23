<?php

namespace App\Http\Controllers\Admin\WebProducts;

use App\Http\Controllers\Controller;
use App\Models\WebProduct;
use Illuminate\Http\Request;

class CreateWebProductController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // returns the create view
        return view('admin.webproducts.create_webproducts');
    }

}
