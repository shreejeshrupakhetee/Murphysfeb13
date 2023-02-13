<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Webproduct;

class ProductController extends Controller
{
    public function index()
 {
 $products = Product::all();
 return view("website-design",compact("products"));
 }
 public function index1()
 {
 $webproduct = Webproduct::all();
 return view("web-hosting",compact("webproducts"));
 }
}
