<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoffeeShopController extends Controller
{
    public function index()
{
    return view('coffee.index');
}

}
