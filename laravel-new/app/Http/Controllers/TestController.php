<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index() {
        echo "Test function";
        return view('test',['name' => 'Suraj', 'count' => '3'] );
    }
}
