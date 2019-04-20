<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;
use App\Address;

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
      // $request->validate([
      //   'name' => 'required|string',
      //   'transportation' => 'required|boolean',
      //   'instituteType' => 'required',
      //   'hostel' => 'required|boolean',
      //   'sector' => 'required|boolean',
      //   'affiliation' => 'required|string',
      //   'principal_name' => 'required|string',
      //   'coEducation' => 'required|boolean',
      //   'scholarship' => 'required|boolean',
      //   'location' => 'required|string',
      //   'town_id' => 'required',
      //   'subarea_id' => 'required',
      //   'email' => 'required|email',
      //   'website' => 'required',
      //   'city' => 'required',
      //   'phone_number' => 'required',
      // ]);
      $data = $request->all();
      $i = Institute::create([
          'name' => $data['name'],
          'transportation' => $data['transportation'],
          'hostel' => $data['hostel'],
          'scholarship' => $data['scholarship'],
          'coEducation' => $data['coEducation'],
          'instituteType' => $data['instituteType'],
          'affiliation' => $data['affiliation'],
          'sector' => $data['sector'],
          'important_dates' => $data['important_dates'],
          'principal_name' => $data['principal_name'],
      ]);
      $i->save();
      $a = Address::create([
        'location' => $data['location'],
        'town_id' => $data['town_id'],
        'subarea_id' => $data['subarea_id'],
        'city' => $data['city'],
        'email' => $data['email'],
        'lat' => 31.4,
        'lng' => 76.4,
        'website' => $data['website'],
        'institute_id' => $i->id,
        'phone_number' => $data['phone_number'],
      ]);
      $a->save();
      return redirect()->route('institute.index')
                      ->with('success','New Institute Created Successfully');
    }
}
