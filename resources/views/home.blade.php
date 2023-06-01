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
    <div class="content_home my-5">
        <div class="container h-100">
            <div class="row h-50">
                <div class="card col p-0 me-4">
                    <a href="{{ route('movies') }}" style="color: black">
                        <img src="https://static.dc.com/2023-05/TFLSH_INSTA_MAIN_1936x1936_DOM.jpg?w=1200" alt="Title">
                        <div class="card-body">
                            <h4 class="card-title"> <strong> MOVIES </strong></h4>
                            <p class="card-text">Discover our last movies</p>
                        </div>
                    </a>
                </div>

                <div class="card col p-0 me-4">
                    <a href="{{ route('comics') }}" style="color: black">
                        <img src="https://pyxis.nymag.com/v1/imgs/f31/d82/35f9cbf66c1e314a40f98db42f6f08758f-16-dc-rebirth.rsquare.w700.jpg"
                            alt="Title">
                        <div class="card-body">
                            <h4 class="card-title"><strong> COMICS </strong> </h4>
                            <p class="card-text">Classic DC Comics</p>
                        </div>
                    </a>
                </div>

                <div class="card col me-4">
                    <img src="https://www.merchandisingplaza.es/506541/Gorra-Batman-Gorra-Batman-unisex-s.jpg"
                        alt="Title">
                    <div class="card-body">
                        <h4 class="card-title"><strong>SHOP</strong></h4>
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
