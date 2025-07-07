<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/one', function () {
    $d = [7, 2, 3, 8];
    $d2 = [5, 4, 8];
    $str="https://www.google.com";
    $reg= "/(http|https).\/\/www.\w.(com|org|net)/";
    $rslt=preg_match($reg,$str);
     list($a,$b,$c)=$d2;
    return view('ViewOne', compact('rslt'));
});
