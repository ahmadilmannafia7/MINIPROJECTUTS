@extends('layouts.app')
@section('content')



    <div class="container0">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ Vite::asset('resources/images/champion.png') }}"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Champion</h5>
                        <p>The king of Europe.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ Vite::asset('resources/images/pride.png') }}"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pride</h5>
                        <p>The pride of London.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ Vite::asset('resources/images/passion.png') }}"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Passion</h5>
                        <p>More than just a match.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container1">

        <div class="card" style="width: 18rem;">

            <img src="{{ Vite::asset('resources/images/mudryk.png') }}"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Players</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">More Information</a>
            </div>

        </div>




        <div class="card" style="width: 18rem;">
            <img src="{{ Vite::asset('resources/images/trophy.png') }}"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Trophies</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">More Information</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{ Vite::asset('resources/images/brand.png') }}" class="card-img-top"
                alt="...">
            <div class="card-body">
                <h5 class="card-title">Club</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">More Information</a>
            </div>
        </div>

        <div class="card" style="width: 18rem; border-radius: 0px;">
            <img src="{{ Vite::asset('resources/images/legend.png') }}"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Legends</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">More Information</a>
            </div>
        </div>
    </div>


    <div id="footer" class="bg-light py-5">
        <!-- Container -->
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-lg-3 mb-5">
                    <a href="#" class="logo text-decoration-none">
                        <div class="d-flex">
                            <img class="img-fluid"
                                src="{{ Vite::asset('resources/images/.png') }}"
                                alt="Bootstrap Logo" style="width: 40px" />
                            <div class="fs-5 ms-2 text-black">Chelsea FC</div>
                        </div>
                    </a>
                    <div class="mt-2 text-muted">
                        <small>Designed and built with all the love in the world by the
                            <a href="#" class="text-black">Bootstrap team</a> with the help
                            of <a href="#" class="text-black">our contributors</a>.</small>
                    </div>
                    <div class="mt-2 text-muted">
                        <small>Code licensed <a href="#" class="text-black">MIT</a>, docs
                            <a href="#" class="text-black">CC BY 3.0</a>.</small>
                    </div>
                    <div class="mt-2 text-muted">
                        <small>Currently v5.3.0-alpha2.</small>
                    </div>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-5">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Home</a></li>
                        <li class="mb-2"><a href="#">Docs</a></li>
                        <li class="mb-2"><a href="#">Examples</a></li>
                        <li class="mb-2"><a href="#">Icons</a></li>
                        <li class="mb-2"><a href="#">Themes</a></li>
                        <li class="mb-2"><a href="#">Blog</a></li>
                        <li class="mb-2"><a href="#">Swag Store</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Guides</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Getting started</a></li>
                        <li class="mb-2"><a href="#">Starter template</a></li>
                        <li class="mb-2"><a href="#">Webpack</a></li>
                        <li class="mb-2"><a href="#">Parcel</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Projects</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Bootstrap 5</a></li>
                        <li class="mb-2"><a href="#">Bootstrap 4</a></li>
                        <li class="mb-2"><a href="#">Icons</a></li>
                        <li class="mb-2"><a href="#">RFS</a></li>
                        <li class="mb-2"><a href="#">npm starter</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Community</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Issues</a></li>
                        <li class="mb-2"><a href="#">Discussions</a></li>
                        <li class="mb-2"><a href="#">Corporate sponsors</a></li>
                        <li class="mb-2"><a href="#">Open Collective</a></li>
                        <li class="mb-2"><a href="#">Slack</a></li>
                        <li class="mb-2"><a href="#">Stack overflow</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <style>
        .container1 {
            display: flex;
            gap: 30px;
            justify-content: center;
            background-color: ;
            max-height: 100vh;
            padding: 40px;
        }



        .container {
            display: flex;
            gap: 200px;


        }

        .container0 {
            background-color: #D1D3D4;


        }

        .carousel-item {
            height: 700px;



        }


        .bg-purple {
            background-color: #034694 !important;
        }

        #main a {
            color: gray;
        }

        #main a:hover {
            color: rgb(73, 73, 73);
        }

        #footer a {
            text-decoration: none;
            color: black;
        }

        #footer a:hover {
            text-decoration: underline;
            color: var(--bs-primary) !important;
        }

        .btn-primary {
            background-color: #034694 !important;

        }

        img {
            width: 40px;
        }
    </style>
@endsection
