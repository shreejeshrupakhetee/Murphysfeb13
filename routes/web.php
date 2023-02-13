<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Paymentcontroller;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(SampleController::class)->group(function(){

    Route::get('login', 'index')->name('login');

    Route::get('registration', 'registration')->name('registration');

    
    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');

    Route::post('validate_login', 'validate_login')->name('sample.validate_login');

    
    Route::get('dashboard', 'dashboard')->name('dashboard');
});

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');



Route::controller(Dashboardcontroller::class)->group(function(){ 
    Route::get('contact-us','contactus')->name('contactus');


    Route::get('website-design','websitedesign')->name('websitedesign');
    Route::get('web-hosting','webhosting')->name('webhosting');

    Route::get('improve-seo','improveseo')->name('improveseo');
    Route::get('refer-friend','referfriend')->name('referfriend');
    Route::get('discounts','discounts')->name('discounts');

});

Route::controller(UserController::class)->group(function(){ 
    Route::resource('user', App\Http\Controllers\UserController::class);
    
    Route::get('user/update','user.update')->name('user.update');
    Route::get('showuser','ShowUserlist')->name('showuser');

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','is_admin'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'adminhome'])->name('adminhome');
});

Route::controller(Paymentcontroller::class)->group(function(){
    Route::get('invoice','invoice')->name('invoice');
});
