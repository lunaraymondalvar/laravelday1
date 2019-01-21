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
    return view('home');
});

Route::get('/users', function () {
    return view('users');
});

// Route::get('/sample', function () {
//     return view('sample',
//     	[
//     		'name' => 'Juan',
//     		'middlename' => 'Dela',
//     		'lastname' => 'Cruz'
// 		]);
// });

// Route::get ('/route', "NameController@function");
Route::get('/sample', "SampleController@greetPerson");

// Route::get('/users', function () {
// 	return view('users');
// });


// Route::get('/sample', function () {
// 	$fullname = [
//     	'name' => 'Juan',
//     	'middlename' => 'Dela',
//     	'lastname' => 'Cruz'
// 	];
// 	return view('sample', compact('fullname'));
	// return view('sample')->with('fullname', $fullname);
// });

Route::get('/users', "SampleController@ListPerson");

