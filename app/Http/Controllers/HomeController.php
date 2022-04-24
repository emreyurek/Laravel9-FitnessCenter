<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $sliderdata = Product::limit(3)->get();
        $productlist1 = Product::limit(3)->get();
        return view('home.index', [
            'sliderdata' => $sliderdata,
            'productlist1' => $productlist1
        ]);
    }

}
