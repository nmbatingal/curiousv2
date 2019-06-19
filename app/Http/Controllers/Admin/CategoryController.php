<?php

namespace App\Http\Controllers\Admin;

use File;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

use App\Models\Admin\Category\CategoryField;
use App\Models\Admin\Category\CategoryDomain;
use App\Models\Admin\Category\CategorySubdomain;

use App\Imports\CategoryImports;

class CategoryController extends Controller
{
    public function addFieldCategory(Request $request) 
    {
        $catField = CategoryField::create(['category_field' => $request->inputField]);

        return redirect()->route('admin.fields');
    }

    public function addDomainCategory(Request $request) 
    {
        $catDomain = CategoryDomain::create([
                        'category_domain' => $request->inputDomain, 
                        'category_field_id' => $request->inputField,
                    ]);

        return redirect()->route('admin.fields');
    }

    public function addSubdomainCategory(Request $request) 
    {
        $catSubdomain = CategorySubdomain::create([
                        'category_subdomain' => $request->inputSubdomain, 
                        'category_domain_id' => $request->inputDomain,
                    ]);

        return redirect()->route('admin.fields');
    }

    public function fileUpload(Request $request)
    {
        //validate the xls file
        $this->validate($request, [
            'inputFile'	=> 'required'
        ]);
     
        if($request->hasFile('inputFile')) {
            $extension = File::extension($request->inputFile->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
     
                $path = $request->inputFile->getRealPath();
                // $data = Excel::load($path, function($reader) {})->get();
                $data = Excel::import(new CategoryImports, $request->inputFile);

                /*if(!empty($data) && $data->count()) {
     
                    foreach ($data as $key => $value) {

                        $field = CategoryField::firstOrCreate(['category_field' => $value->category_field]);
                        $domain = CategoryDomain::firstOrCreate([
                                    'category_domain' => $value->category_domain,
                                    'category_field_id' => $field->id,
                                ]);
                        $subdomain = CategorySubdomain::firstOrCreate([
                                    'category_subdomain' => $value->category_subdomain,
                                    'category_domain_id' => $domain->id,
                                ]);
                    }
                }*/
     
                return back();
     
            } else {
                Session::flash('error', 'File is a '.$extension.' file! Please upload a valid xls/csv file!');
                return back();
            }
        }
    }
}
