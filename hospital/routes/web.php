<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\CatagorydeController;
use App\Http\Controllers\DoctorShow;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\sett_doc_show;
use App\Http\Controllers\appointmentshow;
use App\Http\Controllers\catagory_delete_update;
use App\Http\Controllers\ServiceController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// appointment from data
Route::get('/appointmentadd', [DoctorShow::class, 'appointment']);
Route::post('/from', [AppointmentController::class, 'store']);
Route::get('/appointmentshow', [appointmentshow::class, 'index'])->middleware(['auth', 'verified']);
Route::get('/appointmentdelete/{id?}', [AppointmentController::class, 'delete']);
Route::get('/appointmentedit/{id?}', [AppointmentController::class, 'edit']);
Route::get('/appointmentupdate/{id?}', [AppointmentController::class, 'update']);
// DoctorController
Route::get('/adddoctor', [DoctorShow::class, 'doctor'])->middleware(['auth', 'verified']);
Route::get('/showdoctor', [DoctorShow::class, 'show']);
Route::get('/doctorshow/{id?}', [DoctorShow::class, 'show2']);
Route::get('/listdoctor', [DoctorShow::class, 'list'])->middleware(['auth', 'verified']);
Route::get('/deletedoctor/{id?}', [DoctorShow::class, 'delete']);
Route::get('/editdoctor/{id?}', [DoctorShow::class, 'edit']);
Route::post('/updatedoctor/{id?}', [DoctorShow::class, 'update']);
Route::post('/doctor', [DoctorController::class, 'store']);

// Catagory Controller

Route::get('/cata', [CatagoryController::class, 'index'])->middleware(['auth', 'verified']);
Route::get('/catashow', [CatagoryController::class, 'show']);
Route::post('/catatory', [CatagoryController::class, 'store']);
Route::get('/catagoryall', [CatagorydeController::class, 'index'])->middleware(['auth', 'verified']);
Route::get('/catagoryall/{id?}', [CatagorydeController::class, 'delete']);
Route::get('/updatecatagory/{id?}', [CatagorydeController::class, 'edit']);
Route::post('/updatecatagory/{id?}', [CatagorydeController::class, 'update']);

// Site_Controller
Route::post('/setting', [SettingController::class, 'store']);
Route::get('/set', [SettingController::class, 'index'])->middleware(['auth', 'verified']);
Route::get('/', [sett_doc_show::class, 'index']);
Route::get('/show', [sett_doc_show::class, 'show'])->middleware(['auth', 'verified']);
Route::get('/settingdelete/{id?}', [sett_doc_show::class, 'delete']);
Route::get('/settingedit/{id?}', [sett_doc_show::class, 'edit']);
Route::post('/settingupdate/{id?}', [sett_doc_show::class, 'update']);


// Service
Route::get('/addservice', [ServiceController::class, 'index'])->middleware(['auth', 'verified']);
Route::get('/listservice', [ServiceController::class, 'view'])->middleware(['auth', 'verified']);
Route::get('/showservice', [ServiceController::class, 'show']);
Route::get('/deleteservice/{id?}', [ServiceController::class, 'delete']);
Route::get('/editservice/{id?}', [ServiceController::class, 'edit']);
Route::post('/updateservice/{id?}', [ServiceController::class, 'update']);
Route::post('/service', [ServiceController::class, 'store']);


