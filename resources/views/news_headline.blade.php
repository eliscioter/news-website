@extends('index')
@section('title', 'Headlines')

@section('css')
    <style>
        body {
                font-family: 'Nunito', sans-serif;
                background-color: #010b13;
                color: #fff;
            }
            .news-section {
                height: 100%;
                display: grid;
                place-items: center;
                padding: 20px;
            }
            .card {
                border: 1px solid #9a9a9a;
                border-radius: 10px;
                width: 50%;
                margin-bottom: 20px;
                padding: 10px;
                
            }
            .card-img {
                max-width: 25%;
            }
            .news-img {
                max-height: 100%;
                max-width: 100%;
                padding: 5px;
            }
            

            @media (min-width: 768px) {
                .card-content {
                    display: flex;
                }
            }
            @media (min-width: 768px) and (max-width: 992px) {
                .card {
                    width:75%;
                }
            }
            @media (min-width: 576px) and (max-width: 768px) {
                .card-img {
                    width: 100%;
                }
            }
            @media (max-width: 576px) {
                .card {
                    width: 100%;
                }
                .card-img {
                    width: 100%;
                }
                .news-img {
                    width: 100%;
                }
            }

        </style>
@endsection


@section('content')
            <h1>fuck</h1>
        <!-- <section class="news-section">
            @for ($i = 0; $i < $data['totalResults']; $i++)
                <div class="card">
                    <div class="card-title">
                        <h1 style="margin: 0;">  
                            {{$data['articles'][$i]['title']}}
                        </h1> 
                        <br/>
                        <span style="font-size: 0.5rem;">
                            {{$data['articles'][$i]['publishedAt']}}
                        </span>
                    </div>
                    <div class="card-content">
                        <div class="card-img">
                            <img src={{$data['articles'][$i]['urlToImage']}} alt={{$data['articles'][$i]['description']}} class="news-img">
                        </div>
                        <div class="card-body">
                            <p>
                                {{$data['articles'][$i]['description']}}
                            </p>
                            <a href={{$data['articles'][$i]['url']}} target="_blank" style="font-size: 0.7rem; float:right; color: #d0d0d0;">Read more &raquo;</a>
                            <br/>
                        
                        </div>
                    </div>
                    <span style="font-size: 0.5rem;">
                        - {{$data['articles'][$i]['source']['name']}}
                    </span>
                </div>
            @endfor
        </section> -->
@endsection