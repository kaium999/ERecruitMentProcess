<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Hash;
use App\Models\ProfilePicture;
use App\Models\Applicant;
class ApplicantController extends Controller
{
  
    public function Connection(){
        return "Connection Successfully";
    }
    public function AddApplicantInputPage(){
        return view('AddApplicantPage');
    }
    public function AddApplicant(Request $req){
        $applicant=new Applicant();
        $applicant->applicantname=$req->name;
        $applicant->applicantemail=$req->email;
        $applicant->applicantMoblie=$req->mobile_number;
        $applicant->applicantPassword=\Hash::make($req->password);
        $applicant->applicantPreAddress=$req->pre_address;
        $applicant->applicantParAddress=$req->par_address;
        $applicant->save();
        if($req->hasfile('image')){
            $file=$req->file('image');
            $extension=$file->getClientOriginalName();
            $filename=time().'.'.$extension;
            $file-> move(public_path('public/Image'), $filename);
            $profile=new ProfilePicture();
            $profile->profileImage=$filename;
           $applicant->ProfilePicture()->save($profile);

        } 

      
        return "sucessfull";
        //return redircet('AddApplicantPage');
    }
}
