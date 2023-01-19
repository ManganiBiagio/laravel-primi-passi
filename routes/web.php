<?php

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
    $data=[
        "name"=>"Pippo",
        "surname"=>"Rossi",
        "links"=>["about-us","conctact-us","help-me"],

    ];
    
    return view('home',$data);
})->name("home");

Route::get("about-us",function(){
    return view("about-us");
});
Route::get("conctact-us",function(){
    return view("conctact-us");
});
Route::get("help-me",function(){
    return view("help-me");
});
