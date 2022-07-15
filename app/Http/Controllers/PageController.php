<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }

    public function trains() {
        $trains = 'Sono la pagine dei treni';
        return view('trains', compact('trains'));
    }
}
