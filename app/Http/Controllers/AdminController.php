<?php

namespace App\Http\Controllers;
use App\Town;
use Illuminate\Http\Request;
use App\Department;
use App\Degree;
use GuzzleHttp;

// \Exception\GuzzleException;
use GuzzleHttp\Client;

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
      $output = '<option>Choose...</option>';
      if (isset($_GET["town_id"])) {
        $subareas = Town::with('subareas')->where('id',$_GET["town_id"])->first();
        if(isset($_GET["id"])){
          $id = $_GET["id"];
          foreach ($subareas->subareas as $s) {
            if ($id == $s->id) {
              $output.='<option selected value='.$s->id.'>'.$s->name.'</option>';
            }
            else {
              $output.='<option value='.$s->id.'>'.$s->name.'</option>';
            }
          }
        }
        else {
          foreach ($subareas->subareas as $s) {
            $output.='<option value='.$s->id.'>'.$s->name.'</option>';
          }
        }
      }
      return $output;
    }

    public function department(Request $request)
    {
      $output = '<option>Choose...</option>';
      if(isset($_GET["inst_id"])){
        $departs = Department::where('institute_id',$_GET["inst_id"])->get();
        foreach ($departs as $d) {
          $output.='<option value='.$d->id.'>'.$d->name.'</option>';
        }
      }
      return $output;
    }

    public function degrees(Request $request)
    {
      $output = '<option>Choose...</option>';
      if(isset($_GET["dept_id"])){
        $departs = Degree::where('department_id',$_GET["dept_id"])->get();
        foreach ($departs as $d) {
          $output.='<option value='.$d->id.'>'.$d->name.'</option>';
        }
      }
      return $output;
    }

    public function latlng(Request $request)
    {
      $output = array();
      if(isset($_GET["address"])){
        $address = $_GET["address"];
        $client = new Client();
        $result = (string)  $client->post("https://maps.googleapis.com/maps/api/geocode/json?address=$address&key=AIzaSyDGQs-TY6bUtndfezIiYNev6pCD1tcfTso")->getBody();
        $json = json_decode($result);
        $output[0] = $json->results[0]->geometry->location->lat;
        $output[1] = $json->results[0]->geometry->location->lng;
        return $output;
      }
    }

    public function cResult(Request $request)
    {
      dd($request->all());
    }
}
