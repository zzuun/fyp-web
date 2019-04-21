<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Faculty;

class DepartmentController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  public function index()
  {
    $data = Department::latest()->paginate(5);
    return view('department.index',compact('data'))
            ->with('i',(request()->input('page',1)-1)*5);
  }

  public function create()
  {
    return view('department.create');
  }

  public function store(Request $request)
  {
    $data = $request->all();
    $dept = Department::create([
      'name' => $data['deptName'],
      'institute_id' => $data['institute_id'],
      'departmentType' => $data['departmentType'],
    ]);
    $dept->save();
    $names = $data['name'];
    $desi = $data['designation'];
    foreach (array_combine($names, $desi) as $n => $d) {
      $f = Faculty::create([
        'name' => $n,
        'designation' => $d,
        'department_id' => $dept->id,
      ]);
      $f->save();
    }
    return redirect()->route('department.index')
                      ->with('success','New Department Created Successfully!');
  }

  public function show($id)
  {
    $data = Department::with('faculty')->where('id',$id)->first();
    return view('department.details', compact('data'));
  }
}
