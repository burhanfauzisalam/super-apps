<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalimuridController extends Controller
{
    public function index()
    {
        return view('masters.walimurid.index');
    }
}
