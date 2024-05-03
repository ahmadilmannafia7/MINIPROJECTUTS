<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //public function index()
    {
        $items = Barang::all();
        return view('home', compact('items'));
    }
}
