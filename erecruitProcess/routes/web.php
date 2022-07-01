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
Route::get('edit/{id}',"App\Http\Controllers\ApplicantController@applicantEditProfile");
Route::post('/edit',"App\Http\Controllers\ApplicantController@applicantUpdateProfile");

/*Log In Routing*/
Route::get('/',"App\Http\Controllers\LogIN@GetLogIn");
Route::post('checkLogIn',"App\Http\Controllers\LogIN@LoginCheack");
Route::get('aplogOut',"App\Http\Controllers\LogIN@apLogout");

/*Add Education Routing*/


Route::get('education',"App\Http\Controllers\EducationController@GetEducation");
Route::post('addeducation',"App\Http\Controllers\EducationController@addEducation");
/*Employee Log In Routing*/
Route::get('logIngetpage',"App\Http\Controllers\EmployeeeLogin@LogInpageGet");
Route::post('checkLogInE',"App\Http\Controllers\EmployeeeLogin@LogInCheckE");
Route::get('logout',"App\Http\Controllers\EmployeeeLogin@logOut");
/*Add Job Routing*/
Route::get('jobadd',"App\Http\Controllers\JobPostController@jobAddPage");
Route::post('jobsave',"App\Http\Controllers\JobPostController@jobsave");
Route::get('seePostJOb',"App\Http\Controllers\JobPostController@SeeJobPost");
Route::get('alljobsee',"App\Http\Controllers\JobPostController@AllpostShow");



/*CV Routing*/

Route::get('CvpageGet/{id}',"App\Http\Controllers\CvController@uploadCvpage");
Route::post('CvpageGet',"App\Http\Controllers\CvController@uploadCv");


/*ApplyApplicant Page Routing*/
Route::get('ApplyApplicantPage/{id}',"App\Http\Controllers\ApplyController@ApplyApplicantSee");