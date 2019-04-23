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
        'lat' => $data['lat'],
        'lng' => $data['lng'],
        'website' => $data['website'],
        'institute_id' => $i->id,
        'phone_number' => $data['phone_number'],
      ]);
      $a->save();
      return redirect()->route('institute.index')
                      ->with('success','New Institute Created Successfully');
    }

    public function show($id)
    {
      $data = Institute::with('address','degrees','departments')->where('id',$id)->first();
      return view('institute.details', compact('data'));
    }

    public function edit($id)
    {
      $data = Institute::with('address')->where('id',$id)->first();
      return view('institute.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
      $institute = Institute::with('address')->where('id',$id)->first();
      $institute->name = $request->get('name');
      $institute->sector = $request->get('sector');
      $institute->transportation = $request->get('transportation');
      $institute->coEducation = $request->get('coEducation');
      $institute->scholarship = $request->get('scholarship');
      $institute->hostel = $request->get('hostel');
      $institute->affiliation = $request->get('affiliation');
      $institute->instituteType = $request->get('instituteType');
      $institute->important_dates = $request->get('important_dates');
      $institute->principal_name = $request->get('principal_name');
      $institute->save();
      $address = $institute->address;
      $institute->address->location = $request->get('location');
      $institute->address->lat = $request->get('lat');
      $institute->address->lng = $request->get('lng');
      $institute->address->website = $request->get('website');
      $institute->address->Email = $request->get('email');
      $institute->address->phone_number = $request->get('phone_number');
      $institute->address->town_id = $request->get('town_id');
      $institute->address->subarea_id = $request->get('subarea_id');
      $institute->address->city = $request->get('city');
      $institute->address->save();
      return redirect()->route('institute.index')
                        ->with('success','Institute Successfully Updated!');
    }

    public function destroy($id)
    {
      $institute = $institute = Institute::with('address','departments','degrees')->where('id',$id)->first();
      $institute->address->delete();
      $institute->departments->delete();
      $institute->degrees->delete();
      $institute->address->delete();
      $institute->delete();
      return redirect()->route('institute.index')
                        ->with('success','Institute Successfully Deleted!');
    }
}
