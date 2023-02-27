<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ListProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // returns the list view
        $products = Product::orderBy('id', 'asc')->paginate(3);//returns db value in descending order with pagination
        return view('admin.products.list_products', compact('products'));
    }

}
