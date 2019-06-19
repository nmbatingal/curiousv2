<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin\Category\CategoryField;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $catField  = CategoryField::all();

        return view('landing', compact('catField'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function search()
    {
        $catField  = CategoryField::all();

        return view('landing', compact('catField'));
    }
}
