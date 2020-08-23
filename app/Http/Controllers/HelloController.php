<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $exampleString = 'Hello from HelloController.php.';
        return view('subviews.hello' , compact('exampleString'));
    }
}
