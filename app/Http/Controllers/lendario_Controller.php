<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lendario_Controller extends Controller
{
    public function index(Request $request)
    {

        return view('lendarios');
    }
}
