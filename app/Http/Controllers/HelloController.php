<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function about()
    {
        $exampleString = 'Hello from HelloController.php.';
        return view('about' , compact('exampleString'));
    }

    public function services()
    {
        $services = \App\Service::all();
        return view('services', compact('services'));
    }
}
