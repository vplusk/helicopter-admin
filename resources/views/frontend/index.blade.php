@extends('frontend.layouts.app')

@section('content')    

    <header>
        <div class="container">
            <div class="head flex">
                <a href="" class="logo">
                    {!! $index_data->logo !!}
                    <span class="logo-title">{{ $index_data->site_name }}</span>
                </a>
                <div class="main-menu">                    
                    <ul class="menu">
                        <li><a href="#" class="active">About us</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Our projects</a></li>
                        <li><a href="#">Process</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="main">
        <div class="heading">
            <h1 class="title dot heading-title">{{ $index_data->title }}</h1>
            <p class="heading-subtitle">{!! $index_data->subtitle !!}</p>
        </div>
        <div class="services flex">
            @foreach ($services as $service)
            <div class="service-item">
                <div class="service-icon">{!! $service->icon !!}</div>
                <div class="service-text">
                    <p>
                        {{ $service->text }}
                    </p>                    
                </div>
            </div>
            @endforeach           
            
        </div>
        <div class="offer">
            <h1 class="title dot offer-title">Our offer</h1>
            <div class="offers flex">
                @foreach ($offers as $offer)
                <div class="offer-item">
                    <div class="offer-icon">{!! $offer->icon !!}</div>                    
                    <h3 class="offer-title">{{ $offer->title }}</h3>
                    <p class="offer-text">{{ $offer->text }}</p>                    
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <span>© 2017. helicopter view. All rights reserved.</span>
            <span>Design and development — <a href="#" class="link-development">Sponge D&D</a>.</span>
        </div>
    </footer>
    

    
@endsection
