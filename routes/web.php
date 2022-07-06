<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Adduser;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Users;
use Illuminate\Support\Str;
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
})->name('welcome');




Route::post('/sendmail', [MailController::class, 'sendmail'])->name('sendmail');
Route::get('/sendmail/{id}', [MailController::class, 'send']);
Route::get('/users', [Users::class, 'Users'])->name('users');

Route::get('/adduser', function () {
    return view('adduser');
});

Route::post('/adduser', [Adduser::class, 'addUser'])->name('adduser');
