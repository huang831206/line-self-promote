<?php

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
    $page_options = [
        ['name' => 'Home'],
        ['name' => 'About'],
        ['name' => 'MyWorks'],
        ['name' => 'Skills']
    ];

    $ssr = [
        'name' => '黃琮閔'
    ];

    return view('home')->with(['page_options' => $page_options, 'ssr' => $ssr]);
});

// get basic info
Route::post('/basic_info', 'InformationController@all');
// get new random digit
Route::get('/handwrite', 'HandwriteController@get');
// verify a image
Route::post('/handwrite', 'HandwriteController@verify');
