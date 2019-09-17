<?php

namespace App\Http\Controllers\Research;

use Auth;
use File;
use Session;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Models\Research\ResearchArticle;
use App\Models\Admin\Category\CategoryField;

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
        $researchUploads = ResearchArticle::where('uploader_id', $account->id)->orderBy('created_at', 'DESC')->paginate(5);
        return view('research.index', compact('account', 'researchUploads'));
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

    /**
     *
     *
     *
     */
    public function create($id)
    {
        $categories = CategoryField::with('catDomains.catSubdomains')->get();
        return view('research.create', compact('categories'));
        // return dd($categories);
    }

    /**
     *
     *
     *
     */
    public function store(Request $request, User $user)
    {
        $research = new ResearchArticle;

        // research category setup
        $category_id = explode('|', $request->category);

        // author array setup

        $research->publication_title = $request->researchTitle;
        $research->keywords          = $request->keywords;
        $research->authors           = $request->authors;
        $research->category_field_id = $category_id[0];
        $research->category_domain_id = $category_id[1];
        $research->category_subdomain_id = $category_id[2];
        $research->funding_agency = $request->funding_agency;
        $research->project_cost = $request->project_cost;
        $research->project_location = $request->project_location;
        $research->project_duration_start = $request->project_duration_start.'-01';
        $research->project_duration_end = $request->project_duration_end.'-01';
        $research->status = $request->status;
        $research->research_content  = $request->research_content;
        $research->access_type = $request->access_type;
        $research->uploader_id = Auth::user()->id;

        // get file name and size
        if ( $request->hasFile('research_file') ) {

            $filename = $request->research_file->getClientOriginalName();
            // $filepath = 'public/research_upload/'.$research->id, $filename;

            $research->filename = $filename;
            $research->filesize = $request->research_file->getClientSize();
            // $research->filepath = $filepath;
        }

        if ( $research->save() ) {

            $request->research_file->storeAs('public/research_file_upload/'.$research->id, $filename);
        }

        return redirect()->route('researcher.index', Auth::user()->id);
    }


}
