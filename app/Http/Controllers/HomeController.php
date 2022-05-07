<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function product($id)
    {
        $data = Product::find($id);
        $images = DB::table('images')->where('product_id', $id)->get();
        return view('home.product', [
            'data' => $data,
            'images' => $images,

        ]);
    }

}
