<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        return view('product');
    }

    function foodBeverage()
    {
        return view('category.food-beverage');
    }

    function beutyHealth()
    {
        return view('category.beuty-health');
    }

    function homeCare()
    {
        return view('category.home-care');
    }

    function babyKid()
    {
        return view('category.baby-kid');
    }
}
