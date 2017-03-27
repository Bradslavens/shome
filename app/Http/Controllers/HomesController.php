<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomesController extends Controller
{
    // show the homes page
    public function index()
    {
        return view('homes');
    }
}
