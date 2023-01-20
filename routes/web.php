<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\SocialiteController;
use App\Http\Middleware\Cors;
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
Route::controller(GlobalController::class)->group(function(){
    // Route::get('/', 'getAll')->name('getAll')->middleware('App\Http\Middleware\MyMiddleware');
Route::get('/', 'getAll')->name('getAll');
Route::get('index', 'getAll')->name('getAll');
Route::get('logout', 'logout');
Route::get('help', 'help');
Route::get('contact', 'contact');
Route::get('about', 'about');
Route::post('contactus', 'contactus');
Route::get('neighbourhoods', 'neighbourhoods');
Route::get('dictionaries', 'dictionaries');
Route::post('neighbour_post/{id}', 'neighbourhoods');
Route::get('streetscapes', 'streetscapes');
Route::post('streetscapes_post/{id}', 'streetscapes');
Route::get('masterplans', 'masterplans');
Route::post('masterplans_post/{id}', 'masterplans');



});



Route::get('legal' , [GlobalController::class, 'getLegal']);
Route::get('confidentialite' , [GlobalController::class, 'getConf']);



Route::post('deleteuser/{id}', [GlobalController::class, 'deleteUser'])->name('deleteUser');

Route::post('contactmail' , [MailController::class, 'sendMessage']);



// La redirection vers le provider
Route::get("redirect/{provider}",[SocialiteController::class, 'redirect'])->name('socialite.redirect');
// Le callback du provider
Route::get("callback/{provider}",[SocialiteController::class, 'callback'])->name('socialite.callback');