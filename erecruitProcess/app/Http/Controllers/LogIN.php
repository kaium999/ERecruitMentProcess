<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use Session;
use Hash;
class LogIN extends Controller
{
    public function GetLogIn(){
        return view("LogInPage");
    }
    /*public function GetdeshBorad(){
        return view('Applicant_DeshBoard');
    }*/

    public function LoginCheack(Request $req){
        $obj=Applicant::where('applicantemail','=',$req->email)->first();
        if($obj){
            if(Hash::check($req->password,$obj->applicantPassword)){
                $req->session()->put('logid',$obj->id);
                $data=$req->session()->put('username',$obj->name);
             return view('Applicant_DeshBoard');
            }
            else{
             return "You are not Athentic User";
            }
        }else{
         return "You email are not Authentic";
        }
    }
}
