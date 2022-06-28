<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job_post;
class JobPostController extends Controller
{
    public function jobAddPage(){
        return view ('JobPostPage');
    }

    public function jobsave(Request $req){
        $post=new Job_post();
        $post->job_title=$req->jobTitle;
        $post->job_description=$req->jobdescription;
        $post->employee_id=session('logid');
        $post->save();

        return view ('JobPostPage');
    }
    public function SeeJobPost(){
        $data=session('logid');
        $postdata=Job_post::where('employee_id',$data)->get();
        return view('PostdataShow',compact('postdata'));
    }
    public function AllpostShow(){
        $post=Job_post::all();
        return view('ShowAllJobPost',compact('post'));
    }
}
