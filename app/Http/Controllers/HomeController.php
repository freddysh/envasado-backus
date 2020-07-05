<?php

namespace App\Http\Controllers;

use App\Marca;
use App\Planta;
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
        $plantas = Planta::get();
        return view('home', compact('plantas'));
    }
    public function show($id)
    {
        $plantas = Planta::with('envasados')->where('id', $id)->get()->first();
        $marcas = Marca::get();
        return view('envasados', compact('plantas', 'id', 'marcas'));
    }
}
