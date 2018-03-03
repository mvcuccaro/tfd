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
     * @return Response
     */
    public function show()
    {
		//the location of the people data
		$url			= 'https://raw.githubusercontent.com/mvcuccaro/tfd/master/public/data/people_data.json';


		//make an http request for the people data
		try { 
			$http	 		= new Client();
			$response 		= $http->get($url);
			$people_data 	= $response->getBody()->getContents();

			//return view
			return view('people', [
			'people' => $people_data
			]);
		}

		//if the http request fails show the error view
		catch(RequestException $e){
			return view('error', [
				'error' => $e
			]);
		}
    }
}