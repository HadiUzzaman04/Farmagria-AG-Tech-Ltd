<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::prefix('website')->group(function() {
    Route::get('/home', 'FrontendController@index')->name('home');
    Route::get('/aboutus','FrontendController@aboutus')->name('aboutus');
    Route::get('/contactus','ContactusController@contactus')->name('contactus');
    Route::get('/testimonial','FrontendController@testimonial')->name('testimonial');
    Route::get('/web-development','FrontendController@webdevelopment')->name('webdevelopment');
    Route::get('/Mobile-app-development','FrontendController@appdevelopment')->name('appdevelopment');
    Route::get('/ERP-development','FrontendController@erp')->name('erp');
    Route::get('/website-design','FrontendController@website')->name('websitedesign');
    Route::get('/software-development','FrontendController@software')->name('software');
    Route::get('/domain-hosting','FrontendController@hosting')->name('hosting');
});
