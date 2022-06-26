<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Applicant;

class EducationController extends Controller
{
    public function GetEducation(){
        return view('EducationPage');
    }

    public function addEducation(Request $req){
        $education=new Education();
        $education->degree_name=$req->degree;
        $education->grade=$req->grade;
        $education->Institution_name=$req->ins_name;
        $education->passing_year=$req->p_year;
        $education->applicant_id=session('logid');
        $education->save();
    }
}
