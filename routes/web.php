<?php

use App\Http\Controllers\CollectionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\TestController;
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

Route::get('/test', [TestController::class, 'test']);

Route::controller(GlobalController::class)->middleware('cache.headers:public;max_age=2628000;etag')->group(function () {
    // Route::get('/', 'getAll')->name('getAll')->middleware('App\Http\Middleware\MyMiddleware');
    Route::get('/', 'getAll');
    Route::get('/filter', 'getAll')->name('filter');

    Route::get('index', 'getAll')->name('getAll');
    Route::get('logout', 'logout');
    Route::get('contact', 'contact');
    Route::get('about', 'about');
    Route::get('people', 'people');
    Route::get('work', 'work');
    Route::post('contactus', 'contactus');
    Route::get('subscribe', 'subscribe');
    Route::get('alldictionary', 'alldictionary');
    Route::get('dictionaries_post/', 'dictionaries_post')->name('dictionaries_post');
    Route::get('allwebresources', 'allwebresources');
    Route::get('webresources_post/', 'webresources_post')->name('webresources_post');
    Route::get('read', 'read');

    Route::get('urbanscapes', 'neighbourhoods');
    Route::get('urbanscapes/filter', 'neighbourhoods')->name('nfilter');
    Route::get('urbanscapes_post/', 'neighbourhoods_post')->name('urbanscapes_post');
    Route::get('streetscapes', 'streetscapes');
    Route::get('streetscapes/filter', 'streetscapes')->name('sfilter');
    Route::get('streetscapes_post/', 'streetscapes_post')->name('streetscapes_post');
    Route::get('masterplans', 'masterplans');
    Route::get('masterplans/filter', 'masterplans')->name('mfilter');
    Route::get('masterplans_post/', 'masterplans_post')->name('masterplans_post');
    Route::get('mindscapes', 'mindscapes');
    Route::get('mindscapes_post/', 'mindscapes_post')->name('mindscapes_post');
    Route::post('import', 'import');
    Route::get('submit_project', 'submit');
    Route::post('submit_project', 'submit_project');
    Route::post('save_collection', 'saveCollection')->name('save.collection');
    Route::post('check_collection', 'checkCollection')->name('check.collection');
    Route::get('login', 'login');
});



Route::get('legal', [GlobalController::class, 'getLegal']);
Route::get('confidentialite', [GlobalController::class, 'getConf']);
Route::get('cookies', [GlobalController::class, 'cookies']);
Route::get('association', [GlobalController::class, 'association']);

Route::post('deleteuser/{id}', [GlobalController::class, 'deleteUser'])->name('deleteUser');
Route::post('contactmail', [MailController::class, 'sendMessage']);


Route::post('user/login', [GlobalController::class, 'userLogin'])->name('user.login');
// La redirection vers le provider
Route::get("redirect/{provider}", [SocialiteController::class, 'redirect'])->name('socialite.redirect');
// Le callback du provider
Route::get("callback/{provider}", [SocialiteController::class, 'callback'])->name('socialite.callback');

Route::get('schedule', function () {
    Artisan::call('quote:daily');
    return "successfully!";
});

Route::controller(CollectionController::class)->middleware('cache.headers:public;max_age=2628000;etag')->group(function () {

    Route::get('/collections', 'collections')->name('collections');
});
