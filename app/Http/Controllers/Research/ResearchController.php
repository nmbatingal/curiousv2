<?php

namespace App\Http\Controllers\Research;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $account = User::where('id', $id)->with('followers')->first();
        return view('research.index', compact('account'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function following($id)
    {
        $account = User::where('id', $id)->with('follows')->first();
        return view('research.following', compact('account'));
        // return $account;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function followers($id)
    {
        $account = User::where('id', $id)->with('followers')->first();
        return view('research.followers', compact('account'));
    }
}
