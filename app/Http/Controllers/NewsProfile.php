<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsProfile extends Controller
{
    public function list() {
        $url = 'https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=618518684c3a4b948ce36d93ea6e72c9';
        $data = Http::get($url)->json();
        // $response = $data->json();

        

        return view('news_content', ['data' => $data]);

        // return Http::get('https://newsapi.org/v2/top-headlines?country=us&apiKey=618518684c3a4b948ce36d93ea6e72c9')->body();
    }
}
