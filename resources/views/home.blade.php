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
