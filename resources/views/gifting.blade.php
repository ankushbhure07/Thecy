@extends('layouts.main')
@section('title')
    Gifting Items
@endsection
@section('customcss')
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
        hr{
            margin: 4px !important;
        }
        .showcase-text span{
            font-size: 15px;
            font-weight: 400;    
        }
    </style>
@endsection
@section('content')
    <header class="masthead container mb-5">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-white">
                        <h1 class="mb-5">"Your Style, Your Statement: Unleash the Power of Personalized Fashion"</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container plisting fullWidth">
        <div class="container plisting fullWidth p-0">
            <div class="d-flex justify-content-end ">
                <div class="col-lg-9 col-md-8  pro-list">
                    <div class="breadcrumbcustome">
                        <div class="row justify-content-between align-items-end align-items-lg-center">
                            <header class="col-lg-6 col-md-6 col-12">
                                <h1 class="list-header">All Items
                                    <span class="title-count" style="color: rgb(135, 139, 148);"> - </span>
                                </h1>
                            </header>
                            <div class="w-full" style="max-width: 235px;">
                                <div id="sort" class="filteroptionsModal">
                                    <div title="sort" class="">
                                        <select class="form-select form-select-sm col-md-12 col-12">
                                            <option checked="checked" value="DEFAULT">Select Sorting Options</option>
                                            <option value="A2Z">A to Z</option>
                                            <option value="PRICE_H2L">Price-High to Low</option>
                                            <option value="PRICE_L2H">Price-Low to High</option>
                                            <option value="LATEST">Newest</option>
                                            <option value="POPULARITY">Popularity</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row filter-chips-wrap pt-2"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 col-12 filterCol">
                    <div class="mb-3">
                        <label class="">Products</label>
                        <select class="form-select form-select-sm" name="" id="" onfocus="this.size=4;"
                            onblur="this.size=0;" onchange="this.size=1; this.blur()">
                            <option selected>Select</option>
                            <option value="">T-shirt</option>
                            <option value="">Caps</option>
                            <option value="">Mugs</option>
                            <option value="">Keychains</option>
                            <option value="">Calenders</option>
                            <option value="">Oversized T-shirt</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="">Products</label>
                        <select class="form-select form-select-sm" name="" id="">
                            <option selected>Prices</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-6">
                                <button type="button" class="btn btn-outline-primary w-100">Apply</button>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6">
                                <button type="button" class="btn btn-outline-primary w-100">Clear</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12 pro-list mb-5">
                    <div class="row">
                        @foreach ($product as $item)
                            <div class="col-lg-3 order-lg-1 my-auto showcase-text mb-5">
                                <img src="product_image/{{ $item->product_image }}" class="img-fluid" alt="">
                                <div class="row justify-content-center align-items-center g-2 mt-1">
                                    <div class="col-md-6">
                                        <h6 style="text-align: left;">{{ $item->product_name }}</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 style="text-align: right;"> {{ $item->product_type }} </h6>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="lead mb-0">₹ {{ $item->product_price }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach                     
                    </div>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </div>
@endsection
@section('customjs')
@endsection
