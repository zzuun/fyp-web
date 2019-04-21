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
    return view('degree.index',compact('data'))
            ->with('i',(request()->input('page',1)-1)*5);
  }

  public function create()
  {
    return view('degree.create');
  }
}
