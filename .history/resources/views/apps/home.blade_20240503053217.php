@extends('layouts.app')
@section('content')
    <div class="container py-2 px-4">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Daftar pemain
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">U-20</a></li>
                        <li><a class="dropdown-item" href="#">U-18</a></li>
                        <li>
                            <a class="dropdown-item" href="#">TROPHY</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">INFORMASI PERTANDINGAN</a>
                </li>
            </ul>
            <form class="d-flex" role="search" data-bs-theme="light">
                <input class="form-control me-2" type="search" placeholder="CARI" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">
                    CARI
                </button>
            </form>
        </div>
    </div>
    </nav>

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
                    <img src="https://media.vanityfair.com/photos/626acbdb6c174fa7992e18bd/master/pass/Chelsea-F.C.-Tout-Embed.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://frontofficesports.com/wp-content/uploads/2023/03/FOS-23-3.28-Chelsea-FC.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://img.chelseafc.com/image/upload/f_auto,w_1440,c_fill,g_faces,q_90/editorial/match-reports/2022-23/Leeds%20home/fofana-celebs-leeds-h.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
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
            <img src="https://cdn1-production-images-kly.akamaized.net/T-PS678csSy-CGxL4r0nLqovTKk=/1200x1200/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4298324/original/051827300_1674314674-AP23021505080610.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>



        <div class="card" style="width: 18rem;">
            <img src="https://i.guim.co.uk/img/media/eb6caf6db81be662905ee1230f1eddc6a9831624/0_206_5472_3283/master/5472.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=0f2236596712182911c4fef6b47c55e2"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="https://pbs.twimg.com/profile_images/1724010627969024000/tcvPR3Qy_400x400.jpg" class="card-img-top"
                alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card" style="width: 18rem; border-radius: 0px;">
            <img src="https://www.si.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTY4MDA3NDUyMjY5MjkwODgw/chelsea-fc-v-tottenham-hotspur-premier-league-5c85356d399f6a19a5000001jpg.jpg"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
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
                                src="https://upload.wikimedia.org/wikipedia/id/thumb/c/cc/Chelsea_FC.svg/1200px-Chelsea_FC.svg.png"
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
