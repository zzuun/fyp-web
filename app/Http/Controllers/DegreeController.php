<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Degree;

class DegreeController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  public function index()
  {
    $data = Degree::latest()->paginate(5);
    // dd($data);
    return view('degree.index',compact('data'))
            ->with('i',(request()->input('page',1)-1)*5);
  }

  public function create()
  {
    return view('degree.create');
  }

  public function store(Request $request)
  {
    $data = $request->all();
    $degree = Degree::create([
      'name' => $data['name'],
      'duration' => (float)$data['duration'],
      'lastMerit' => (float)$data['lastMerit'],
      'system' => $data['system'],
      'creditHours' => $data['creditHours'],
      'noOfSeats' => $data['noOfSeats'],
      'shiftMorning' => $data['shiftMorning'],
      'shiftAfternoon' => $data['shiftAfternoon'],
      'numberOfViews' => 0,
      'fees' => $data['fees'],
      'institute_id' => $data['institute_id'],
      'department_id' => $data['department_id'],
    ]);
    $degree->save();
    return redirect()->route('degree.index')
                      ->with('success','New Degree Created Successfully!');
  }

  public function edit($id)
  {
    $data = Degree::find($id);
    return view('degree.edit', compact('data'));
  }

  public function update(Request $request, $id)
  {
    $degree = Degree::find($id);
    $degree->name = $request->get('name');
    $degree->system = $request->get('system');
    $degree->duration = $request->get('duration');
    $degree->institute_id = $request->get('institute_id');
    $degree->department_id = $request->get('department_id');
    $degree->fees = $request->get('fees');
    $degree->shiftMorning = $request->get('shiftMorning');
    $degree->shiftAfternoon = $request->get('shiftAfternoon');
    $degree->lastMerit = $request->get('lastMerit');
    $degree->noOfSeats = $request->get('noOfSeats');
    $degree->creditHours = $request->get('creditHours');
    $degree->save();
    return redirect()->route('degree.index')
                      ->with('success','Degree Updated Successfully!');
  }

  public function show($id)
  {
    $data = Degree::find($id);
    return view('degree.details', compact('data'));
  }

  public function destroy(Request $request, $id)
  {
    $degree = Degree::find($id);
    $degree->delete();
    return redirect()->route('degree.index')
                      ->with('success','Degree Deleted Successfully!');
  }
}
