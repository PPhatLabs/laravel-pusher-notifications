<?php

use App\Http\Controllers\PusherNoitication;
use Illuminate\Support\Facades\Route;

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

Route::get('push-notification', [PusherNoitication::class, 'sendNotification']);

Route::get('/push', function () {
    event(new App\Events\StatusLiked('Someone'));
    return 0;
});