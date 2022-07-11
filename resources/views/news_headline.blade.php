@extends('index')
@section('title', 'Headlines')

@section('css')
    <style>
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
            box-shadow: 0 4px 2px -2px #778899;
        }
        **.card-img {
            max-width: 25%;
            margin: 0;
        }
        .news-img {
            max-width: 100%;
            padding: 5px;
        }
        **.card-body {
            max-width: 100%;
        }

        @media (min-width: 768px) {
            **.card-img {
                display: inline-block;
                margin: 0;
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
                max-width: 100%;
            }
            
        }

    </style>
@endsection


@section('content')
            
        <section class="news-section">
            @for ($i = 0; $i < $data['totalResults']; $i++)
                <div class="card">
                    <div class="card-title">
                        <h1 style="margin: 0;">  
                            {{$data['articles'][$i]['title']}}
                        </h1> 
                        <br/>
                        <time style="font-size: 0.5rem;">
                            {{$data['articles'][$i]['publishedAt']}}
                        </time>
                    </div>
                    <div class="card-content">
                        <figure class="card-img">
                            <img src={{$data['articles'][$i]['urlToImage']}} alt={{$data['articles'][$i]['description']}} class="news-img">
                            <figcaption class="card-body">
                                    {{$data['articles'][$i]['description']}}
                            </figcaption>
                        </figure>      
                        <a href={{$data['articles'][$i]['url']}} target="_blank" style="font-size: 0.7rem; float:right; color: #d0d0d0; padding-right: 10px">Read more &raquo;</a>
                    </div>
                    <br/>
                    <i style="font-size: 0.5rem;"> 
                        - {{$data['articles'][$i]['source']['name']}}
                    </i>
                </div>
            @endfor
        </section>
@endsection