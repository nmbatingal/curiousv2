<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Category\CategoryField;
use App\Model\Admin\Category\CategoryDomain;
use App\Model\Admin\Category\CategorySubdomain;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function fields()
    {
    	// select options
    	$catField  = CategoryField::all();

    	// for list of category table
    	$categories = CategorySubdomain::with('catDomain.catField')->get();

        return view('admin.fields', compact('catField', 'categories'));
    }
}
