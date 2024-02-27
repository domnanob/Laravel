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

Route::get('/ArrayWriteOut', function () {
    $tomb = ["elso", "masodik","harmadik"];
    return view('ArrayView', [
        "arr"=>$tomb
    ]);
});

Route::get('/post/{cim}', function ($cim) {
    $tomb = ["elso", "masodik","harmadik"];
    return view('post',[
        "title" => $tomb[$cim] ?? abort(404)
    ]);
});

