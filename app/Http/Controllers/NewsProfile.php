<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsProfile extends Controller
{
    public function headlineList() {
        $url = 'https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=618518684c3a4b948ce36d93ea6e72c9';
        $data = Http::get($url)->json();

        return view('news_headline', ['data' => $data]);
    }

    public function techList() {
        $url = 'https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=618518684c3a4b948ce36d93ea6e72c9';
        $data = Http::get($url)->json();

        return view('news_tech', ['data' => $data]);
    }

    public function feedbackList() {
        return view('feedback');
    }

}
