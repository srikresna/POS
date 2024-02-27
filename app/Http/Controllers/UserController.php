<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index($id, $name)
    {
        return 'ID: '.$id.' Name: '.$name;
    }
}
