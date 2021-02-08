<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmployeeController;


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
$route_prefix = '/sprint5/';

Route::get($route_prefix . '/', function () {
    return view('welcome');
});
Route::get($route_prefix . 'welcome', function () { 
    return view('welcome'); 
})->name('home');
Route::resource($route_prefix . 'projects', ProjectController::class);
Route::resource($route_prefix . 'employees', EmployeeController::class);