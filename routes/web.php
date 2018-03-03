<?php

/**
 * root route or root route depending on how you prounce route - is it root or route
 */
Route::get('/', function () {
    return view('welcome');
});


/**
 * get people
 */
Route::get('/tfd/people', 'PeopleController@show'); 
	
