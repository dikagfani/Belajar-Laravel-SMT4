<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // $name = 'Ardika';
        // $email = 'ardikajambi@gmail.com';
        $data = [
            'title' => 'SI UNJA',
            'name' => 'ARDIKA',
            'email' => 'ardikakeren@gmail.com'
        ];
        return view('home', compact('data'));
    }
}
