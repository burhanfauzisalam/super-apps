<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'masters' => Menu::where('parent_id', 2)
                 ->where('status', 1)
                 ->where('placement', 1)
                 ->orderBy('order')
                 ->get(),
        ];
        return view('dashboard', $data);
    }
    
}
