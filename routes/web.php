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
        [
            'name' => 'Home'
        ],[
            'name' => 'About'
        ]
    ];

    return view('home')->with(['page_options' => $page_options]);
});


Route::get('/home', function () {

    $page_options = [
        [
            'name' => 'Home'
        ],[
            'name' => 'About'
        ]
    ];

    return view('home')->with(['page_options' => $page_options]);
});

Route::post('/basic_info', function (Request $request) {
    $data = [
        'all' => [
            'name',
            'age',
            'other'
        ]
    ];
    return $data;
});
