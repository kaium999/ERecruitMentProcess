<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Applicant;
use App\Models\CV;
use File;
class CvController extends Controller
{
    public function uploadCvpage($id){
        $postId=$id;
        //return $data;
        
        return view("CvUploadPage")->with('postId',$postId);
    }
    public function uploadCv(Request $req){
        $cv=new CV();
        if($req->hasfile('image')){
            $file=$req->file('image');
            $extension=$file->getClientOriginalName();
            $filename=time().'.'.$extension;
            $file-> move(public_path('public/Image'), $filename);
            
            $cv->cvName=$filename;
           

        } 
        $cv->applicant_id=session('logid');
        $cv->jobpost_id=$req->postid;
        $cv->save();

        return "Successfully";
    }
}
