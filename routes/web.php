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
    return view('welcome');
});


/**
 * get people
 */
Route::get('/tfd/people/{sort?}', function($sort = 'lname'){
	//init static people - assuming this is coming from an http requset providing json payloads
	$people_data = '[{"first_name":"Michael","last_name":"Cuccaro","favorite_color":"red"},{"first_name":"Tiffany","last_name":"Wells","favorite_color":"green"},{"first_name":"Teddy","last_name":"Bear","favorite_color":"crimson"}]';

	//return view
	return view('people', [
		'people' => $people_data
	]);
});
