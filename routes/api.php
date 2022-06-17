<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FileUploadController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:api'], function () {
    // Route::get('/teacher/{id}', 'App\Http\Controllers\TeacherController@getteacher');
    Route::get('/teacher/{id}', [TeacherController::class, 'getteacher']);
    Route::get('/Periodtime', 'PeriodtimeController@getperiodtimes')
    ->name('Periodtime');
    Route::get('/getdatesforweek/{num}', 'TirmdateController@getdatesforweek')
    ->name('getdatesforweek');
      Route::get('/students/{class_name}', 'StudentController@loadstudents')
    ->name('loadstudents');  
      Route::get('/saveabsence/{data}/{absent}', 'StudentsAbsenceController@saveabsence')
    ->name('saveabsence');  
      Route::get('/getbsence/{data}', 'StudentsAbsenceController@getbsence')
    ->name('getbsence'); 
      Route::get('/getparticipate/{main}/{data}', 'StudentsParticipateIdController@getparticipate')
    ->name('getparticipate');    
    Route::get('/saveparticipations/{main}/{data}', 'StudentsParticipateIdController@saveparticipations')
    ->name('saveparticipations');    
       Route::get('/Newparticipations/{main}', 'StudentsParticipateIdController@Newparticipations')
    ->name('Newparticipations');    
    
    Route::get('/loadparticipations/{main}', 'StudentsParticipateIdController@loadparticipations')
    ->name('loadparticipations');  

    Route::get('/schedule/{school_id}/{teacher_id}', 'ScheduleController@schedule')
    ->name('schedule');



    Route::get('/teachermaindataget', 'TeacherController@teachermaindataget')
    ->name('teachermaindataget');
    Route::post('/fileupload', 'FileUploadController@fileupload')
    ->name('fileupload');
    Route::post('store_file', [FileUploadController::class, 'fileStore']);
    Route::post('formSubmit','FileUploadController@formSubmit');
    // Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');

    Route::get('/userdata', function() {
        
        return Auth::user();
    });





    Route::post('logout', 'Auth\LoginController@logout');

    Route::get('/user', 'Auth\UserController@current');

    Route::patch('settings/profile', 'Settings\ProfileController@update');
    Route::patch('settings/password', 'Settings\PasswordController@update');
});

Route::group(['middleware' => 'guest:api'], function () {
    Route::post('login', 'Auth\LoginController@login');
    Route::post('register', 'Auth\RegisterController@register');

    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

    Route::post('email/verify/{user}', 'Auth\VerificationController@verify')->name('verification.verify');
    Route::post('email/resend', 'Auth\VerificationController@resend');

    Route::post('oauth/{driver}', 'Auth\OAuthController@redirectToProvider');
    Route::get('oauth/{driver}/callback', 'Auth\OAuthController@handleProviderCallback')->name('oauth.callback');
});
  //  ===========================================
  Route::get('/loadmarksschooldata/{school_id}', 'MarksschooldataController@loadmarksschooldata')
  ->name('loadmarksschooldata');

  Route::get('/loadmarksdata/{school_id}/{dev}', 'MarksschooldataController@loadmarksdata')
  ->name('loadmarksdata');
  Route::get('/loadmarksdatastudent/{school_id}/{dev}/{student_num}', 'MarksschooldataController@loadmarksdatastudent')
  ->name('loadmarksdatastudent');
  // Route::get('/loadmarksschooldata/{school_id}', 'MarksschooldataController@loadmarksschooldata')
  // ->name('loadmarksschooldata');
  // loadmarksschooldata($school_id)
  // loadmarksdata($school_id,$dev)
  // loadmarksdatastudent($school_id,$dev,$student_num)

  //  ===========================================