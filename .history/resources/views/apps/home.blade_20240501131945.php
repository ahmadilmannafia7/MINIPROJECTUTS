@extends('layouts.app')
@section('content')
    <section class="hero-banner">
        <div class="row">
            <div class="col-sm-6">
                <div class="dash top-distance-dash-hero"></div>
                <div class="greeting">
                    Hello <span class="special-greet">There</span>
                </div>
                <div class="main-title">
                    <p>qwqw</p>
                    <p>qwwqwqw</p>
                </div>
                <div class="short-desc">
                    <p>asasasasasa <br>
                        sasasas
                    </p>
                    <p>asasasasasasas</p>
                </div>
                <a href="{{ route('item.index') }}" type="button" class="btn btn-light btn-view-data">View Data <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="col-sm-6">
                <img src="{{ Vite::asset('resources/images/home/figure-profile.png') }}" class="figure-profile img-fluid" alt="figure profile">
            </div>
        </div>
    </section>
@endsection
