<?php

namespace App\Http\Controllers;
use App\Town;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.admin');
    }

    public function subarea(Request $request)
    {
      $output = '<option selected>Choose...</option>';
      if (isset($_GET["town_id"])) {
        $subareas = Town::with('subareas')->where('id',$_GET["town_id"])->first();
        foreach ($subareas->subareas as $s) {
          $output.='<option value='.$s->id.'>'.$s->name.'</option>';
        }
      }
      return $output;
    }
}
