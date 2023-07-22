<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiJsonplaceholderController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client
            ->get('https://jsonplaceholder.typicode.com/posts'
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
            ->get('https://jsonplaceholder.typicode.com/posts/1/'
            )
        ;
        $data = json_decode($response->getBody(), true);
        dd($data);

        return ;
    }
}
