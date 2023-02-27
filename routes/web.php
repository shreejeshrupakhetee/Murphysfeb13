<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Paymentcontroller;
use App\Http\Controllers\Admin\Users\ListUsersController;
use App\Http\controllers\admin\Users\CreateUserController;
use App\Http\controllers\admin\Users\StoreUserController;
use App\Http\controllers\admin\Users\ShowUserController;
use App\Http\controllers\admin\Users\EditUserController;
use App\Http\controllers\admin\Users\UpdateUserController;
use App\Http\controllers\admin\Users\DeleteUserController;
use App\Http\controllers\admin\Users\DeactivateUserController;
use App\Http\controllers\admin\Users\ActivateUserController;
use App\Http\controllers\Admin\Products\ListProductController;
use App\Http\controllers\admin\Products\CreateProductController;
use App\Http\controllers\admin\Products\StoreProductController;
use App\Http\controllers\admin\Products\ShowProductController;
use App\Http\controllers\admin\Products\EditProductController;
use App\Http\controllers\admin\Products\UpdateProductController;
use App\Http\controllers\admin\Products\DeleteProductController;
use App\Http\controllers\admin\WebProducts\ListWebProductController;
use App\Http\controllers\admin\WebProducts\CreateWebProductController;
use App\Http\controllers\admin\WebProducts\StoreWebProductController;
use App\Http\controllers\admin\WebProducts\ShowWebProductController;
use App\Http\controllers\admin\WebProducts\EditWebProductController;
use App\Http\controllers\admin\WebProducts\UpdateWebProductController;
use App\Http\controllers\admin\WebProducts\DeleteWebProductController;


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
    // for admin operations on users
    Route::get('/admin/users/list', [ListUsersController::class,'index'])->name('admin.users.list');
    Route::get('/admin/users/create', [CreateUserController::class,'create'])->name('admin.user.create');
    Route::post('/admin/users/store', [StoreUserController::class,'create'])->name('admin.user.store');
    Route::get('/admin/users/{id}/show',[ShowUserController::class,'show'])->name('admin.user.show');
    Route::get('/admin/users/{id}/edit', [EditUserController::class,'edit'])->name('admin.user.edit');
    Route::put('/admin/users/{id}/update', [UpdateUserController::class,'show'])->name('admin.user.update');
    Route::delete('/admin/users/{id}/delete', [DeleteUserController::class,'destroy'])->name('admin.user.delete');
    Route::get('/admin/users/{id}/deactivate', [DeactivateUserController::class,'deactivate'])->name('admin.user.deactivate');
    Route::get('/admin/users/{id}/activate', [ActivateUserController::class,'activate'])->name('admin.user.activate');
    // for admin operations on products
    Route::get('/admin/products/list',[ListProductController::class,'index'])->name('admin.products.list');
    Route::get('/admin/product/create',[CreateProductController::class,'create'])->name('admin.product.create');
    Route::get('/admin/product/store',[StoreProductController::class,'store'])->name('admin.product.store');
    Route::get('/admin/product/{id}/show',[ShowProductController::class,'show'])->name('admin.product.show');
    Route::get('/admin/product/{id}/edit',[EditProductController::class,'edit'])->name('admin.product.edit');
    Route::get('/admin/product/{id}/update',[UpdateProductController::class,'update'])->name('admin.product.update');
    Route::get('/admin/product/{id}/delete',[DeleteProductController::class,'destory'])->name('admin.product.delete');
        // for admin operations on web-products
        Route::get('/admin/webproducts/list',[ListWebProductController::class,'index'])->name('admin.webproducts.list');
        Route::get('/admin/webproduct/create',[CreateWebProductController::class,'create'])->name('admin.webproduct.create');
        Route::get('/admin/webproduct/store',[StoreWebProductController::class,'store'])->name('admin.webproduct.store');
        Route::get('/admin/webproduct/{id}/show',[ShowWebProductController::class,'show'])->name('admin.webproduct.show');
        Route::get('/admin/webproduct/{id}/edit',[EditWebProductController::class,'edit'])->name('admin.webproduct.edit');
        Route::get('/admin/webproduct/{id}/update',[UpdateWebProductController::class,'update'])->name('admin.webproduct.update');
        Route::get('/admin/webproduct/{id}/delete',[DeleteWebProductController::class,'destory'])->name('admin.webproduct.delete');
        
    
});

Route::controller(Paymentcontroller::class)->group(function(){
    Route::get('invoice','invoice')->name('invoice');
});


// for admin operations on subscriptions
Route::get('/admin/purchases/list', 'Admin\Purchases\ListPurchasesController@index')->name('admin.purchases.list')->middleware('admin');
//Route::get('/admin/subscriptions/create', 'Admin\Subscriptions\CreateSubscriptionController@create')->name('admin.subscription.create')->middleware('admin');
//Route::post('/admin/subscriptions/store', 'Admin\Subscriptions\StoreSubscriptionController@store')->name('admin.subscription.store')->middleware('admin');
Route::get('/admin/subscriptions/{id}/show', 'Admin\Subscriptions\ShowSubscriptionController@show')->name('admin.subscription.show')->middleware('admin');
//Route::get('/admin/subscriptions/{id}/edit', 'Admin\Subscriptions\EditSubscriptionController@edit')->name('admin.subscription.edit')->middleware('admin');
//Route::put('/admin/subscriptions/{id}/update', 'Admin\Subscriptions\UpdateSubscriptionController@update')->name('admin.subscription.update')->middleware('admin');
Route::delete('/admin/subscriptions/{id}/delete', 'Admin\Subscriptions\DeleteSubscriptionController@destroy')->name('admin.subscription.delete')->middleware('admin');
Route::get('/admin/subscriptions/{id}/deactivate', 'Admin\Subscriptions\DeactivateSubscriptionController@deactivate')->name('admin.subscription.deactivate')->middleware('admin');
Route::get('/admin/subscriptions/{id}/activate', 'Admin\Subscriptions\ActivateSubscriptionController@activate')->name('admin.subscription.activate')->middleware('admin');

// for admin operations on plans
Route::delete('/admin/plans/{id}/delete', 'Admin\Plans\DeletePlanController@destroy')->name('admin.plan.delete')->middleware('admin');
