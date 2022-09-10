<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResepsionisController extends Controller
{
    function index(){
        return view('dashboards.resepsionis.index');
        }
    
        function profile(){
            return view('dashboards.resepsionis.profile');
        }
        function settings(){
            return view('dashboards.resepsionis.settings');
        }
}
