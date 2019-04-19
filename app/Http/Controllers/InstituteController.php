<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;

class InstituteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
      $data = Institute::latest()->paginate(5);
      return view('institute.index',compact('data'))
              ->with('i',(request()->input('page',1)-1)*5);
    }

    public function create()
    {
      return view('institute.create');
    }

    public function store(Request $request)
    {
      $request->validate([
        'name' => 'required|string',
        'transport' => 'required|boolean',
        'instituteType' => 'required',
        'hostel' => 'required|boolean',
        'sector' => 'required|boolean',
        'affiliation' => 'required|string',
        'principal_name' => 'required|string',
        'coEducation' => 'required|boolean',
        'scholarship' => 'required|boolean',
      ]);

      Institute::create($request->all());
      return redirect()->route('institute.index')
                      ->with('success','New Institute Created Successfully');
    }
}
