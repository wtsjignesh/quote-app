<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    //
    public function index(){
        $randomQuotes = $this->fetchData();
        return view('welcome', ['randomQuotes' => $randomQuotes]);
    }

    public function fetchData(){
        $response = Http::get('https://raw.githubusercontent.com/ajzbc/kanye.rest/master/quotes.json');
        $quotes = json_decode($response->body());
        $randomQuotes = Arr::random($quotes, 5);
        return $randomQuotes;
    }
}
