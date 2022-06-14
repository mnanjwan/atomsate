<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use App\Mail\AttachmentMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\EmailsController;


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


//ROUTES TO NAVIGATE TO OUR FRONT PAGES
Route::get('/', [App\Http\Controllers\frontPageController::class, 'index']);
Route::get('/contact', [App\Http\Controllers\frontPageController::class, 'contact']);
Route::get('/about', [App\Http\Controllers\frontPageController::class, 'about']);
Route::get('/faq', [App\Http\Controllers\frontPageController::class, 'faq']);
Route::get('/pricing', [App\Http\Controllers\frontPageController::class, 'pricing']);
Route::get('/agriculture', [App\Http\Controllers\frontPageController::class, 'agriculture']);
Route::get('/terms', [App\Http\Controllers\frontPageController::class, 'terms']);

Route::get('/interest', [App\Http\Controllers\frontPageController::class, 'interest']);
Route::post('/interest/store', [App\Http\Controllers\InterestPageController::class, 'store']);


// Route::get('/about', [App\Http\Controllers\frontPageController::class, 'about']);
// Route::get('/about', [App\Http\Controllers\frontPageController::class, 'about']);
// Route::get('/about', [App\Http\Controllers\frontPageController::class, 'about']);
// Route::get('/about', [App\Http\Controllers\frontPageController::class, 'about']);


// Auth::route([
//     'verify' => true
// ]);



//route for mailing
// Route::get('/email', function(){
//     Mail::to('mnanjwan@gmail.com')->send(new WelcomeMail());
//     return new WelcomeMail();
// });


//Route::get('/email', [EmailsController::class, 'email']);

