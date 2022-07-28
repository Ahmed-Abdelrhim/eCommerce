<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

use App\Http\Controllers\Dashboard\LoginController;
//git checkout -b branchName
/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/
###################################### Mcamara Routes     ######################################
Route::group(['prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
    ###################################### Admin Guest Routes ######################################
    Route::group(['namespace' => 'Dashboard', 'middleware' => 'guest:admin' , 'prefix' => 'admin'], function () {
        //View Admin Login Form
        Route::get('login', 'LoginController@adminLoginForm')->name('admin.login');
        // Authenticate Admin If Exists In DB
        Route::post('login', 'LoginController@checkAdminIfExists')->name('admin.post.login');

    });
    ###################################### Admin Guest Routes ######################################
    ###################################### Admin Routes Only  ######################################
    Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin','prefix' => 'admin'], function () {
        Route::get('dashboard', 'DashboardController@index')->name('admin-dashboard');
        Route::get('cantRedirect', 'DashboardController@index')->name('cantRedirect');
        ###################################### Admin Shipping Routes   ######################################

        Route::group(['prefix' => 'settings'], function () {
            Route::get('shipping/{type}', 'SettingsController@shippingMethods')->name('shipping');
            Route::put('edit-shipping/{id}' , 'SettingsController@editShippingMethod')->name('edit.shipping.methods');
        });
        ###################################### Admin Shipping Routes   ######################################

    });
    ###################################### Admin Routes Only  ######################################
###################################### Mcamara Routes     ######################################
});



// php artisan config:clear
// php artisan config:cache

