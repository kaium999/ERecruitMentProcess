<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class educationController extends Controller
{
    public function GetEducation(){
        return view('EducationPage');
    }
}
