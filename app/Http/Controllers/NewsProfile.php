<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsProfile extends Controller
{
    public function headlineList() {
        $url = 'https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=618518684c3a4b948ce36d93ea6e72c9';
        $data = Http::get($url)->json();
        // $response = $data->json();

        

        return view('news_headline', ['data' => $data]);
        // return view('news_headline');
        // return Http::get('https://newsapi.org/v2/top-headlines?country=us&apiKey=618518684c3a4b948ce36d93ea6e72c9')->body();
    }

    public function techList() {
        $url = 'https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=618518684c3a4b948ce36d93ea6e72c9';
        $data = Http::get($url)->json();

        return view('news_tech', ['data' => $data]);
        // return view('news_tech');
    }

    public function feedbackList() {
        return view('feedback');
    }

    public function sign_in_page() {
        return view('sign_in');
    }
    public function register_page() {
        return view('register');
    }
}
