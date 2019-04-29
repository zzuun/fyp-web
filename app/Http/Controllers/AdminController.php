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
}
