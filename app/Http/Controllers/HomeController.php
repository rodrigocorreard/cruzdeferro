<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $url_dolar = 'https://economia.awesomeapi.com.br/all/USD-BRL';
        $dolar = json_decode(file_get_contents($url_dolar));
        return view('home', compact('dolar'));
    }
}
