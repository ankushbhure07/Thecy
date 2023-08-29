@extends('layouts.main')
@section('title')
    Items
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
            opacity: 1;
            transition: all 0.3s ease-in;
            -wekit-transition: all 0.3s ease-in;
        }

        .listhoverimg:hover {
            opacity: 1;
            transition: all 0.3s ease-in;
            -wekit-transition: all 0.3s ease-in;
        }
        header.masthead:before {
            content: "";
            position: absolute;
            background-color: none !important;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            opacity: 0;
        }

        header.masthead {
            position: relative;
            background-color: rgba(255, 0, 0, 0) !important;
            background: url("public/assets/img/services3.png") no-repeat center center;
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
    </style>
@endsection
@section('content')
    <header class="masthead container mb-5">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-white">
                        <h1 class="mb-5" style="visibility: hidden;">"Your Style, Your Statement: Unleash the Power of
                            Personalized Fashion"</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container plisting fullWidth">
        <div class="container plisting fullWidth p-0">
            <div class="d-flex justify-content-end ">
                <div class="col-lg-9 col-md-8  pro-list">                    
                </div>
            </div>

            <div class="row">
            </div>
        </div>
    </div>
@endsection
@section('customjs')
@endsection
