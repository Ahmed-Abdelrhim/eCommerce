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
Route::group(['middleware' => 'disable_back_btn'], function () {
    Route::group(['prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
        ###################################### Admin Guest Routes ######################################

        Route::group(['namespace' => 'Dashboard', 'middleware' => 'guest:admin', 'prefix' => 'admin'], function () {
            //View Admin Login Form
            Route::get('login', 'LoginController@adminLoginForm')->name('admin.login');
            // Authenticate Admin If Exists In DB
            Route::post('login', 'LoginController@checkAdminIfExists')->name('admin.post.login');

        });

        ###################################### Admin Guest Routes ######################################
        ###################################### Admin Routes Only  ######################################

        Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin', 'prefix' => 'admin'], function () {
            ###################################### Admin Dashboard and CantRedirect Routes   ###################
            Route::get('dashboard', 'DashboardController@index')->name('dashboard');
            Route::get('cantRedirect', 'DashboardController@index')->name('cantRedirect');
            ###################################### Admin Dashboard and CantRedirect Routes   ###################
            ###################################### Admin Shipping Routes   ######################################
            Route::group(['prefix' => 'settings'], function () {
                Route::get('shipping/{type}', 'SettingsController@shippingMethods')->name('shipping');
                Route::put('edit-shipping/{id}', 'SettingsController@editShippingMethod')->name('edit.shipping.methods');
            });
            ###################################### Admin Shipping Routes   ######################################
            ###################################### Admin Main And Sub Categories Routes   ######################################
            Route::group(['prefix' => 'categories'] , function() {
                //View All Categories Route
                Route::get('categories/{type?}','CategoriesController@index') -> name('view-categories');
                //View Add New Main Category Form
                Route::get('add-category/{type?}','CategoriesController@addCategory')->name('add-category');
                //Store In Database New Main Category
                Route::post('store-category/{type}','CategoriesController@storeMainCategory')->name('store-category');
                //View Category To Update From
                Route::get('edit-category/{id}','CategoriesController@editCategory')->name('view-update-category');
                //Update Category Function
                Route::put('update-category/{id}','CategoriesController@updateCategory')->name('update-category');
                //Delete Category Function
                Route::get('delete-category/{id}','CategoriesController@deleteCategory')->name('delete-category');

            });
            ###################################### Admin  Main And Sub Categories Routes   ######################################
            ###################################### Admin Edit Profile Routes   ######################################
            Route::Group(['prefix' => 'profile'], function () {
                Route::get('admin-profile', 'AdminProfileController@adminProfile')->name('admin-profile');
                Route::put('update-admin-profile/{id}', 'AdminProfileController@updateAdminProfile')->name('update-admin-profile');
            });
            ###################################### Admin Edit Profile Routes   ######################################
            ###################################### Admin Logout Route   ######################################
            Route::get('admin.logout', 'LoginController@logoutAdmin')->name('admin.logout');
            ###################################### Admin Logout Route   ######################################

        }); // End Admin Routes And Middleware auth:admin


        ###################################### Admin Routes Only  ######################################
###################################### Mcamara Routes     ######################################
    });
});



// php artisan config:clear
// php artisan config:cache

