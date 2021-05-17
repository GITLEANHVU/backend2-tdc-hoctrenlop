<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) {

        $per_page = $request->get('per_page');
        $name = $request->get('name');

        $obj = new Company();
        
        $companies = $obj->where('company_name', 'like', "%$name%")->paginate($per_page);
        $companies->appends(['name' => $name]);
        

        return view("search", ['companies' => $companies]);
    }
}
