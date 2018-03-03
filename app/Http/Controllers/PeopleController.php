<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

class PeopleController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
		//init static people - assuming this is coming from an http requset providing json payloads
		//$people_data 	= '[{"first_name":"Michael","last_name":"Cuccaro","favorite_color":"red"},{"first_name":"Tiffany","last_name":"Wells","favorite_color":"green"},{"first_name":"Teddy","last_name":"Bear","favorite_color":"crimson"},{"first_name":"Muffin","last_name":"Poo","favorite_color":"treats"}]';

		//the location of the people data
		$url			= 'https://raw.githubusercontent.com/mvcuccaro/tfd/issue3/public/data/people_data.json';

		try { 
			$http	 		= new Client();
			$response 		= $http->get($url);
			$people_data 	= $response->getBody()->getContents();

			//return view
			return view('people', [
			'people' => $people_data
			]);
		}

		catch(RequestException $e){
			return view('error', [
				'error' => $e
			]);
		}
    }
}