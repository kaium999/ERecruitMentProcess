<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CV;
class ApplyController extends Controller
{
    public function ApplyApplicantSee($id){
        $data=Cv::where('jobpost_id',$id)->get();
       return view('ApplyApplicantShowPage',compact('data'));
       //$postdata=Jobpost::where('employee_id',$data)->get();

    }
}
