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
    </style>
@endsection
@section('content')

@endsection
@section('customjs')
    <script src="cs/js/jquery-3.3.1.min.js"></script>
    <script src="cs/js/popper.min.js"></script>
    <script src="cs/js/bootstrap.min.js"></script>
    <script src="cs/js/owl.carousel.min.js"></script>
    <script src="cs/js/main.js"></script>
@endsection
