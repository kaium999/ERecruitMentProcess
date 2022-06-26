<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/aaaaa', function () {
    return view('welcome');
});
Route::get("connect","App\Http\Controllers\ApplicantController@Connection");
Route::get('RegistrationPage',"App\Http\Controllers\ApplicantController@AddApplicantInputPage");
Route::post('Addapplicant',"App\Http\Controllers\ApplicantController@AddApplicant");

/*Log In Routing*/
Route::get('/',"App\Http\Controllers\LogIN@GetLogIn");
Route::post('checkLogIn',"App\Http\Controllers\LogIN@LoginCheack");

/*Add Education Routing*/

Route::get('education',"App\Http\Controllers\educationController@GetEducation");