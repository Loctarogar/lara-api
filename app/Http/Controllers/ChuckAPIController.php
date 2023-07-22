<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ChuckAPIController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client
            ->get('https://api.chucknorris.io/jokes/categories'
            )
        ;
        $data = json_decode($response->getBody(), true);
        dd($data);

        return ;
    }

    public function show()
    {
        $client = new Client();
        $response = $client
            ->get('https://api.chucknorris.io/jokes/random'
            )
        ;
        $data = json_decode($response->getBody(), true);
        dd($data);

        return ;
    }
}
