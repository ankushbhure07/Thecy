@extends('layouts.main')
@section('title')
@endsection
@section('customcss')
    <link rel="stylesheet" href="cs/fonts/icomoon/style.css">

    <link rel="stylesheet" href="cs/css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

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

        .sizelist li {}

        /* --------------------- */
        a {
            -webkit-transition: 0.3s all ease;
            -o-transition: 0.3s all ease;
            transition: 0.3s all ease;
        }

        a,
        a:hover {
            text-decoration: none !important;
        }

        .content {
            padding: 7rem 0;
        }

        h2 {
            font-size: 20px;
        }

        .bg-left-half {
            position: relative;
        }

        .bg-left-half:before {
            position: absolute;
            width: 50%;
            height: 100%;
            z-index: -1;
            content: "";
            left: 0;
            top: 0;
            background-color: #f8f9fa;
        }

        .media-29101 img {
            margin-bottom: 20px;
        }

        .media-29101 h3 {
            font-size: 18px;
            font-weight: 900 !important;
        }

        .media-29101 h3 a {
            color: #6c757d;
        }

        .owl-2-style .owl-nav {
            display: none;
        }

        .owl-2-style .owl-dots {
            text-align: center;
            position: relative;
            bottom: -30px;
        }

        .owl-2-style .owl-dots .owl-dot {
            display: inline-block;
        }

        .owl-2-style .owl-dots .owl-dot span {
            display: inline-block;
            width: 15px;
            height: 3px;
            border-radius: 0px;
            background: #cccccc;
            -webkit-transition: 0.3s all cubic-bezier(0.32, 0.71, 0.53, 0.53);
            -o-transition: 0.3s all cubic-bezier(0.32, 0.71, 0.53, 0.53);
            transition: 0.3s all cubic-bezier(0.32, 0.71, 0.53, 0.53);
            margin: 3px;
        }

        .owl-2-style .owl-dots .owl-dot.active span {
            background: #007bff;
        }

        .owl-2-style .owl-dots .owl-dot:active,
        .owl-2-style .owl-dots .owl-dot:focus {
            outline: none;
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
                                        <img src="../product_image/{{ $product->product_image }}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div id="pview" class="mb-2 pimg image-wrapper col-md-6">
                                <div>
                                    <div class="loaded" style="width: 100%; height: 472px; background: rgb(255, 235, 231);">
                                        <img src="../product_image/{{ $product->product_image }}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div id="pview" class="mb-2 pimg image-wrapper col-md-6">
                                <div>
                                    <div class="loaded" style="width: 100%; height: 472px; background: rgb(255, 235, 231);">
                                        <img src="../product_image/{{ $product->product_image }}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div id="pview" class="mb-2 pimg image-wrapper col-md-6">
                                <div>
                                    <div class="loaded" style="width: 100%; height: 472px; background: rgb(255, 235, 231);">
                                        <img src="../product_image/{{ $product->product_image }}" class="img-fluid">
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
                                <p class="delivery-details-txt">Delivery Details</p>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" placeholder="Enter Pincode" minlength="6"
                                        maxlength="6">
                                    <button class="btn btn-outline-primary" type="button"
                                        id="button-addon2">Button</button>
                                </div>
                            </div>

                            {{-- <div class="mtb15 w100 mr-0">
                                <div id="accordion" role="tablist" aria-multiselectable="true" class="accordiontabs">
                                    <div class="card">
                                        <div role="tab" id="headingOne" class="card-header">
                                            <h5 class="mb-0 accordianheading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    Product Details
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" aria-expanded="false" role="tabpanel"
                                            aria-labelledby="headingOne" class="collapse show">
                                            <div class="card-block">
                                                <p>
                                                <div><b>Material &amp; Care:<br></b>Premium Heavy Gauge Fabric</div>
                                                <div>
                                                    100% Cotton&nbsp;<br>Machine Wash<br>
                                                    <span><br><span><b>Manufactured &amp; Sold By:</b>
                                                        </span><br>text<br>
                                                        <a
                                                            target="_blank"rel="Mailto:connect@candy.com">connect@candy.com</a>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div role="tab" id="headingTwo" class="card-header">
                                        <h5 class="mb-0 accordianheading"><a data-toggle="collapse"
                                                data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo" class="collapsed">
                                                Product Description
                                            </a></h5>
                                    </div>
                                    <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="collapse">
                                        <div class="card-block">
                                            <p><span><b>Official Licensed Naruto
                                                        Merchandise.<br><br></b><span>Shop for Naruto: Hokage at The
                                                        Souled Store.<br></span><b><br></b>MRP: Rs. 1499/- incl. of all
                                                    taxes.<b><br></b></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}} 

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
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" style="justify-content: center;">
                    <div class="carousel-item active">
                        <div class="row d-flex">
                            @foreach ($limitedRows as $item)
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <a href="{{ route('single', $item->id) }}"><img
                                            src="../product_image/{{ $item->product_image }}" style="width: 100%;"
                                            alt=""></a>
                                    <p class="text-center"> <b> {{ $item->product_name }} </b></p>
                                    <p class="text-center">₹ {{ $item->product_price }} </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row d-flex">
                            @foreach ($limitedRows as $item)
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <a href="{{ route('single', $item->id) }}"><img
                                            src="../product_image/{{ $item->product_image }}" style="width: 100%;"
                                            alt=""></a>
                                    <p class="text-center"> <b> {{ $item->product_name }} </b></p>
                                    <p class="text-center">₹ {{ $item->product_price }} </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
@endsection
@section('customjs')
@endsection
