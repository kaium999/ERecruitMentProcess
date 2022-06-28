<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Session;
use Hash;

class EmployeeeLogin extends Controller
{
    public function LogInpageGet(){
        return view('EmployeeLogInpage');
    }

    public function LogInCheck(Request $req){
        $obj=Employee::where('email','=',$req->email)->first();
        if($obj){
            if($obj->password==$req->password){
                $req->session()->put('logid',$obj->id);
                $req->session()->put('username',$obj->name);
             return view('EmployeeDeshboard');
            }
            else{
             return "You are not Athentic User";
            }
        }else{
         return "You email are not Authentic";
        }
    }
    public function logOut(){
        if(Session::has('logid')){
            Session::pull('logid');
            return redirect('logIngetpage');
        }
     }
}
