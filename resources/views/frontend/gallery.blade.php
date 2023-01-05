@extends('layouts.mainlayout')

@include('layouts.partials.sub-partials.crumbsGallery')

@section('content')
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
        }

        .gallery-item {
            flex: 0 0 250px;
            position: relative;
            width: 300px;
            height: 200px;
            overflow: hidden;
            margin: 10px;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item .caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s, opacity 0.3s;
        }

        .gallery-item:hover .caption {
            visibility: visible;
            opacity: 1;
        }
    </style>
    <!-- featured section -->
    <div class="mt-5 mb-5">
        <div class="container">
            <div>
                <h4>Foods</h4>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex align-items-center">
                    <div class="gallery">
                        @foreach ($foodgalleries as $foodgallery)
                            <div class="gallery-item">
                                <img src="/images/{{ $foodgallery->image }}" alt="{{ $foodgallery->title }}">
                                <div class="caption">{{ $foodgallery->title }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="">
                <h4>Events</h4>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex align-items-center">
                    <div class="gallery">
                        @foreach ($eventgalleries as $eventgallery)
                            <div class="gallery-item">
                                <img src="/images/{{ $eventgallery->image }}" alt="{{ $eventgallery->title }}">
                                <div class="caption">{{ $eventgallery->title }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end featured section -->
@endsection
