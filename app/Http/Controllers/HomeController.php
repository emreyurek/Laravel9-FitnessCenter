<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        //echo "Index Function";
        return view('home.index');
    }

   /* public function test()
    {
        return view('home.test');
    }

    public function param($id,$number)
    {
        //echo "parameter 1:",$id;
        //echo "<br>parameter 2:",$number;
        //echo "<br>sum parameters :",$id+$number;

        return view ('home.test2',
            [
                'id' => $id,
                'number' => $number
            ]);
    }*/
}
