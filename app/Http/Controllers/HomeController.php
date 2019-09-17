<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin\Category\CategoryField;
use App\Models\Research\ResearchArticle;

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
    public function browse()
    {
        $catField   = CategoryField::all();
        $researches = ResearchArticle::orderBy('publication_title', 'ASC')->paginate(25);
        return view('browse', compact('catField', 'researches'));

        // return $researches;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show(ResearchArticle $research)
    {
        return view('research.show-research', compact('research'));

        // return $researches;
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
