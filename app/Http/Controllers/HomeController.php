<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cover;

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
        $covers = Cover::paginate(5);
        return view('admin.portada.index',  compact('covers'));
    }
}
