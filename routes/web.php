<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnquiryController;   
use App\Http\Controllers\CustomerController;           



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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/enquiry',[EnquiryController::class, 'index']);
Route::get('/addenquiry',[EnquiryController::class, 'enquiryadd']);
Route::post('/getenquirydetails',[EnquiryController::class, 'getenquirydetails']);
//Route::post('/enquiryedit/{id}',[EnquiryController::class, 'enquiryedit']);
Route::get('/enquiryedit/{id}',[EnquiryController::class, 'enquiryedit'])->name('enquiryedit');

Route::put('/update',[EnquiryController::class, 'update'])->name('enquiryupdate');
Route::get('/delete/{id}',[EnquiryController::class, 'destroy'])->name('enquirydelete');

Route::get('/customer',[CustomerController::class, 'index']);
Route::get('/addcustomer',[CustomerController::class, 'customeradd']);
Route::post('/getcustomerdetails',[CustomerController::class, 'getcustomerdetails']);
//Route::post('/enquiryedit/{id}',[EnquiryController::class, 'enquiryedit']);
Route::get('/customeredit/{id}',[CustomerController::class, 'customeredit']);

Route::put('/customerupdate/{id}',[CustomerController::class, 'update'])->name('cutomerupdate');
Route::get('/customerdelete/{id}',[CustomerController::class, 'destroy'])->name('customerdelete');


use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;            
            

Route::get('/', function () {return redirect('/dashboard');})->middleware('auth');
	Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static'); 
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static'); 
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});