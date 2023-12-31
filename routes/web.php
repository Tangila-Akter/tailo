<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SmsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@redirectAdmin')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Admin routes
 */
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Backend\DashboardController@index')->name('admin.dashboard');
    Route::resource('roles', 'Backend\RolesController', ['names' => 'admin.roles']);
    Route::resource('users', 'Backend\UsersController', ['names' => 'admin.users']);
    Route::resource('admins', 'Backend\AdminsController', ['names' => 'admin.admins']);
    Route::resource('upper-pocket', 'Backend\UpperPocketController', ['names' => 'admin.upper-pocket']);
    Route::resource('collar', 'Backend\CollarController', ['names' => 'admin.collar']);
    Route::resource('gola', 'Backend\GolaController', ['names' => 'admin.gola']);
    Route::resource('plate', 'Backend\PlateController', ['names' => 'admin.plate']);
    Route::resource('pasting', 'Backend\PastingController', ['names' => 'admin.pasting']);
    Route::resource('lace', 'Backend\LaceController', ['names' => 'admin.lace']);
    Route::resource('ful', 'Backend\FulController', ['names' => 'admin.ful']);
    Route::resource('button', 'Backend\ButtonController', ['names' => 'admin.button']);
    Route::resource('lower_pocket', 'Backend\LowerPocketController', ['names' => 'admin.lower_pocket']);
    Route::resource('order', 'OrderController', ['names' => 'admin.order']);
    Route::resource('stuff', 'Backend\StuffController', ['names' => 'admin.stuff']);
    Route::resource('account', 'Backend\AccountController', ['names' => 'admin.account']);
    Route::resource('sms', 'Backend\SmsController', ['names' => 'admin.sms']);
    Route::get('multi', [SmsController::class, 'multi'])->name('admin.sms.multi');


    // Login Routes
    Route::get('/login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login/submit', 'Backend\Auth\LoginController@login')->name('admin.login.submit');

    // Logout Routes
    Route::post('/logout/submit', 'Backend\Auth\LoginController@logout')->name('admin.logout.submit');

    // Forget Password Routes
    Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');
});
