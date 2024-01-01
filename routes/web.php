<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\ResponseTeamController;
use App\Http\Controllers\FiscalyearController;
use App\Http\Controllers\InformedController;
use App\Http\Controllers\ReportController;


// Auth::routes(['register' => false]);
Route::get('register', function() {
   abort(404, 'Not Found');
});
//First page 
Route::get('/', function () {
    return view('auth.login');
});

//Login Page
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');

Route::group(['middleware' => ['auth']], function () {
    //Home Page
    Route::get('dashboard', function () {
        return view('layout.dashboard');
    });

    //Adding Member who are involved in any Particular Incident
    Route::post('add_member', [IncidentController::class, 'addMemberToIncident'])->name('add_member');
    Route::get('remove_member/{member_id}/incident/{report_id}', [IncidentController::class, 'removeMemberFromIncident'])->name('remove_member');

    Route::post('add_inform', [IncidentController::class, 'addInformToIncident'])->name('add_inform');
    Route::get('remove_inform', [IncidentController::class, 'removeInformFromIncident'])->name('remove_inform');

    Route::post('add_response', [IncidentController::class, 'addResponseToIncident'])->name('add_response');
    Route::get('remove_response', [IncidentController::class, 'removeResponseFromIncident'])->name('remove_response');

    //Incident
    Route::resource('incident', IncidentController::class);

    //Members
    Route::resource('member', MemberController::class);

    //Response Team
    Route::resource('responseteams', ResponseTeamController::class);

    //Informed To 
    Route::resource('informed', InformedController::class);

    //Fiscal Year
    Route::resource('fiscalyear', FiscalyearController::class);

    //Report
    Route::get('report/{id}/download', [ReportController::class, 'download'])->name('download');

    //Logout
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

