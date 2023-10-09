@extends('layouts.main')
@section('title')
@endsection
@section('customcss')
    <link rel="stylesheet" href="cs/fonts/icomoon/style.css">

    <link rel="stylesheet" href="cs/css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        .listhoverimg {
            position: absolute;
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 0;
            transition: all 0.3s ease-in;
            -wekit-transition: all 0.3s ease-in;
        }

        .listhoverimg:hover {
            opacity: 1;
            transition: all 0.3s ease-in;
            -wekit-transition: all 0.3s ease-in;
        }

        header.masthead {
            position: relative;
            background-color: #343a40;
            background: url("../assets/img/bg1.jfif") no-repeat center center;
            background-size: cover;
            padding-top: 3rem;
            padding-bottom: 1.5rem;
        }

        .btn-outline-primary {
            --bs-btn-color: #956943;
            --bs-btn-border-color: #956943;
            --bs-btn-hover-bg: #956943;
            --bs-btn-hover-border-color: #956943;
            --bs-btn-active-bg: #956943;
            --bs-btn-active-border-color: #956943;
            --bs-btn-disabled-color: #956943;
            --bs-btn-disabled-border-color: #956943;
        }

        .btn:hover {
            color: var(--bs-btn-hover-color);
            background-color: var(--bs-btn-hover-bg);
            border-color: var(--bs-btn-hover-border-color);
        }

        hr {
            margin: 1px !important;
        }

        .showcase-text span {
            font-size: 15px;
            font-weight: 400;
        }


        #social-links ul li a {
            text-decoration: none;
            color: #000000;
            font-size: 6px;
        }

        #social-links ul li a:hover {
            color: #c89364;
            transition: 0.25s ease-in-out;
        }

        .sizelist {
            list-style: none;
            display: flex;
            font-size: 20px;
            margin: 0;
            padding: 0;
        }

        .card-img-top {
            width: 100%;
            border-top-left-radius: calc(.25rem - 1px);
            border-top-right-radius: calc(.25rem - 1px);
        }

        @media screen and (min-width:576px) {
            .carousel-inner {
                display: flex;
            }

            .carousel-item {
                display: block;
                margin-right: 0;
                flex: 0 0 calc(100%/3);
            }
        }

        .carousel-inner {
            padding: 1rem;
        }

        .card {
            margin: 0.5rem;
        }
    </style>
@endsection
@section('content')
    <div class="container plisting fullWidth">
        <div class="container plisting fullWidth p-0">
            <div class="d-flex justify-content-end ">
                <div class="col-lg-9 col-md-8  pro-list">
                    <div class="breadcrumbcustome">
                        <div class="row filter-chips-wrap pt-2"></div>
                    </div>
                </div>
            </div>
            {{-- ------------------------------------ --}}


            <div class="container detailpage fullWidth ">
                {{-- <div class="newbread"><a href="/" class="router-link-active">Home</a>/<span><a
                            href="/explore/oversized-tshirts" class="">Oversized T-Shirts </a>/ </span> <span><a
                            href="/artists/naruto-merchandise" class="">Naruto </a>/ </span> <span
                        class="selected">Naruto: Hokage</span>
                </div> --}}
                <div class="row">
                    <div class="col-md-7">
                        <div class="row mdproduct forDesktop">
                            <div id="pview" class="mb-2 pimg image-wrapper col-md-6">
                                <div>
                                    <div class="loaded" style="width: 100%; height: 472px; background: rgb(255, 235, 231);">
                                        <img src="../public/product_image/{{ $product->product_image }}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div id="pview" class="mb-2 pimg image-wrapper col-md-6">
                                <div>
                                    <div class="loaded" style="width: 100%; height: 472px; background: rgb(255, 235, 231);">
                                        <img src="../public/product_image/{{ $product->product_image }}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div id="pview" class="mb-2 pimg image-wrapper col-md-6">
                                <div>
                                    <div class="loaded" style="width: 100%; height: 472px; background: rgb(255, 235, 231);">
                                        <img src="../public/product_image/{{ $product->product_image }}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div id="pview" class="mb-2 pimg image-wrapper col-md-6">
                                <div>
                                    <div class="loaded" style="width: 100%; height: 472px; background: rgb(255, 235, 231);">
                                        <img src="../public/product_image/{{ $product->product_image }}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-5 pr0">
                        <div class="productinfo px-3">
                            <div class="bx1">
                                <div class="row mr0">
                                    <div class="col-12">
                                        <h3 class="fbold mb-0 title-size">{{ $product->product_name }}</h1>
                                    </div>
                                </div>
                                <p class="mb0">
                                <h4 class="prod-cat">{{ $product->product_type }}</h1>
                            </div>
                            <hr>
                            <div class="price-box-wrapper mb20"><span class="leftPrice pull-right"><span class="fbold"
                                        style="font-size: 1.5em;"><span class="irupee">₹</span>
                                        {{ $product->product_price }}</span> </span></div>
                            <div class="bx1">
                                <div class="seperator mb-1 seperatorExtra"></div>
                                <div>
                                    <p class="select-size" style="font-size: 20px; color:#956943;">
                                        @if ($product->product_type == 'Upper')
                                            Sizes Available
                                        @endif
                                        Colors Available
                                    </p>
                                    <div>
                                        @php
                                            $gets = $product->product_size;
                                            $getString = json_decode($gets, true);
                                        @endphp
                                        <ul class="sizelist">
                                            @if ($getString != null)
                                                @foreach ($getString as $item)
                                                    <li class="p-2">{{ $item }}</li>
                                                @endforeach
                                            @endif
                                        </ul>
                                        {{-- <div class="disableclick outOfStockBox">
                                            <div>
                                                <p class="select-size"><span
                                                        style="font-weight: bold;">Size not available? &nbsp;</span> <span
                                                        class="selectcolor pointer">Notify Me
                                                    </span> <br></p>
                                                <div class="inlineblock"><!----></div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="seperator mt-1 seperatorExtra"></div>
                            </div>
                            <div class="bx1 brdnone">
                                <div class="mb_mbo mb15">
                                    <div class="pull-left">Share</div>
                                    <div class="sharebtns f22">
                                        <div id="social-links">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#!"><i class="bi-facebook fs-3"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!"><i class="bi-twitter fs-3"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!"><i class="bi-instagram fs-3"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="mt-5 mb-5">
                            </div>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Product Details
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            100% Cotton&nbsp;<br>Machine Wash<br>
                                            <span><br><span><b>Manufactured &amp; Sold By:</b>
                                                </span><br>text<br>
                                                <a target="_blank"rel="Mailto:connect@candy.com">connect@candy.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Product Description
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Soon..
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="text-center mb-5 mt-5"> Product Slider</h1>

            <div class="container">
                <div class="card-slider">
                    <div class="col-lg-12 me-2">
                        <div class="card w-100">
                            <img class="card-img-top" src="https://picsum.photos/seed/picsum/200/200"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 me-2">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/seed/picsum/200/200"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 me-2">
                        <div class="card w-100">
                            <img class="card-img-top img-fluid" src="https://picsum.photos/seed/picsum/200/200"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 me-2">
                        <div class="card w-100">
                            <img class="card-img-top" src="https://picsum.photos/seed/picsum/200/200"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 me-2">
                        <div class="card w-100">
                            <img class="card-img-top" src="https://picsum.photos/seed/picsum/200/200"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            {{-- ------------------ --}}
        </div>
    </div>
@endsection
@section('customjs')
    <script>
            <!-- Slick Carousel JavaScript and your custom script -->
            <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
            </script>
        $(document).ready(function($) {
            $(".card-slider").slick({
                dots: true,
                infinite: true,
                speed: 500,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: true,
                responsive: [{
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 400,
                        settings: {
                            arrows: false,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                ],
            });
        });
    </script>
@endsection
