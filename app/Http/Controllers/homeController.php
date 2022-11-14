<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Illuminate\Support\Facades\DB; 

class homeController extends Controller
{
    public function index(Request $request)
    {
        return view('home.index');
    }
    
}
