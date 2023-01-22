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
Route::get('contact', 'contact');
Route::get('about', 'about');
Route::get('work', 'work');
Route::post('contactus', 'contactus');
Route::get('alldictionary', 'alldictionary');
Route::get('allwebresources', 'allwebresources');
Route::get('read', 'read');
Route::get('neighbourhoods', 'neighbourhoods');
Route::get('neighbourhoods_post/', 'neighbourhoods_post');
Route::get('streetscapes', 'streetscapes');
Route::get('streetscapes_post/', 'streetscapes_post');
Route::get('masterplans', 'masterplans');
Route::get('masterplans_post/', 'masterplans_post');
Route::post('import', 'import');



});



Route::get('legal' , [GlobalController::class, 'getLegal']);
Route::get('confidentialite' , [GlobalController::class, 'getConf']);
Route::get('cookies' , [GlobalController::class, 'cookies']);


Route::post('deleteuser/{id}', [GlobalController::class, 'deleteUser'])->name('deleteUser');
Route::post('contactmail' , [MailController::class, 'sendMessage']);



// La redirection vers le provider
Route::get("redirect/{provider}",[SocialiteController::class, 'redirect'])->name('socialite.redirect');
// Le callback du provider
Route::get("callback/{provider}",[SocialiteController::class, 'callback'])->name('socialite.callback');