@extends('layouts.app')

@section('content')
    <div class="p-5 bg-light rounded-3 jumbotron text-white">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">DC COMICS</h1>
            <p class="col-md-8 fs-4">Welcome to Dc Comics replica Website. Made by Giuseppe Vignanello for educational
                purpose</p>
            <button class="btn btn-primary btn-lg" type="button">Example button</button>
        </div>
    </div>
    <div class="content_home">
        <div class="container h-100">
            <div class="row h-50">
                <div class="card col p-0 me-2">
                    <img src="https://static1.colliderimages.com/wordpress/wp-content/uploads/2020/08/justice-league-social.jpg"
                        alt="Title">
                    <div class="card-body">
                        <h4 class="card-title"> <strong> MOVIES </strong></h4>
                        <p class="card-text">Discover our last movies</p>
                    </div>
                </div>
                <div class="card col p-0 me-2">
                    <img src="https://luisgyg.com/wp-content/uploads/2023/02/dc-hero_20220721_SDCC_62d87621a4d733.05089136_62ded671a6a2c2.47617848.jpg"
                        alt="Title">
                    <div class="card-body">
                        <h4 class="card-title"><strong> COMICS </strong> </h4>
                        <p class="card-text">Classic DC Comics</p>
                    </div>
                </div>
                <div class="card col me-2">
                    <img src="https://static.dc.com/dc/files/default_images/Gallery_JLINFINITY_Cv1-%2528Main%2529_60819f32149722.47056974_6081a526328677.07524034.jpg"
                        alt="Title">
                    <div class="card-body">
                        <h4 class="card-title"><strong>MERCHANDISE </strong></h4>
                        <p class="card-text">The perfect geek present</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="banner">
        <div class="container pb-3">
            <div class="row row-cols-6 align-items-center justify-content-center py-4">
                <div class="bannerIcon text-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt=""
                        class="h-100">
                    <span class="text-white">Digital</span>
                </div>
                <div class="bannerIcon text-center ">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="" class="h-100">
                    <span class="text-white">Merchandise</span>
                </div>
                <div class="bannerIcon text-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="" class="h-100">
                    <span class="text-white">Locator</span>
                </div>
                <div class="bannerIcon text-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt=""
                        class="h-100">
                    <span class="text-white">Subscription</span>
                </div>

            </div>
        </div>
    @endsection
