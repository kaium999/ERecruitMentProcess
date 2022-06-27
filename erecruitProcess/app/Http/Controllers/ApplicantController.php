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

    public function applicantEditProfile($id){
        $data=Applicant::find($id);
        return view ('ApplicantProfileEdit',compact('data'));

    }
    public function applicantUpdateProfile(Request $req){
        $data=Applicant::find($req->id);
        $data->applicantname=$req->name;
        $data->applicantemail=$req->email;
        $data->applicantMoblie=$req->phone;
        $data->applicantPreAddress=$req->preaddress;
        $data->applicantParAddress=$req->paraddress;
        if($req->hasfile('image')){

            $destination='public/Image/'.$data->ProfilePicture->profileImage;
          if(File::exists($destination)){
            File::delete($destination);
             }
            $file=$req->file('image');
            $extension=$file->getClientOriginalName();
            $filename=time().'.'.$extension;
            //$file= move('public/uploads/student',$filename);
            $file-> move(public_path('public/Image'), $filename);
            $data->ProfilePicture->profileImage=$filename;
            //$name=$req->file('image')->getClintOriginalName();
            //$file=storeAs('uploads/student/',$name);
        }
        $data->push();

    }
}
