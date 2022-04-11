<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $products;
    private $product;

    public function index(){

        $this->products = Product::all();
        return view('website.home.home',['products' => $this->products]);
    }

    public function details($id){

        $this->product = Product::find($id);
        return view('website.home.details',['product' => $this->product]);
    }
}
