<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Mail\emailNotification;

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
Route::get('/notify', function() {
    // return new emailNotification();
  //  Mail::to('olivia.declerck@dkgroup.fr')->send(new emailNotification());

   // return '<h1>Email Sent</h1>';
});
Route::post('send_mail', [ContactController::class,'store']);
//Route::get('/contact', [ContactController::class,'contactform']);

Route::get('/event', [ContactController::class, 'index'])->name('event.index');