<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchDoctorPageController extends Controller
{
    //
    public function index(){
        return view('search-doctor-page');
    }
}
