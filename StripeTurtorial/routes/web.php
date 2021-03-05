<?php

use Illuminate\Support\Facades\Route; // This line came with the web.php file
use App\Http\Controllers\StripePaymentController; // ADD! Tells Laravel where our controller is located at
use Illuminate\Http\Request;

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

Route::get('/', function () { // This function came with the web.php file as well
    return view('welcome');
});

/******************************Stripe******************************/

Route::post('/payment', [StripePaymentController::class, 'payment']); // ADD! Tells Laravel what function to use in the controller and what type of route method we are using
