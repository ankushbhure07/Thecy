<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/icon.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="{{ asset('public/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    @yield('customcss')
    <style>
        .navbar-nav {
            justify-content: center !important;
        }

        .navbar,
        .navbar a {
            color: #956943 !important;

        }

        .navbar-nav li {
            font-size: 1.3rem;
        }

        * {
            font-family: 'Poppins', sans-serif;
        }

        footer ul li a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            color: #c89364;
            transition: 0.25s ease-in-out;
        }

        .form-select:focus {
            border-color: #d5b9a1;
            outline: 0;
            box-shadow: 0 0 0 0.25rem #ffdbbb;
        }

        option:checked,
        option:hover {
            background-color: #956943;
            box-shadow: 0 0 10px 100px #d5b9a1 inset;
        }

        .accordion {
            --bs-accordion-btn-focus-border-color: #956943;
            --bs-accordion-body-padding-x: 1.25rem;
            --bs-accordion-body-padding-y: 1rem;
            --bs-accordion-active-color: #ffffff;
            --bs-accordion-active-color: #ffffff;
            --bs-accordion-active-bg: #956943;
        }

        .accordion {
            --bs-accordion-color: #212529;
            --bs-accordion-bg: #fff;
            --bs-accordion-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
            --bs-accordion-border-color: var(--bs-border-color);
            --bs-accordion-border-width: 1px;
            --bs-accordion-border-radius: 0.375rem;
            --bs-accordion-inner-border-radius: calc(0.375rem - 1px);
            --bs-accordion-btn-padding-x: 1.25rem;
            --bs-accordion-btn-padding-y: 1rem;
            --bs-accordion-btn-color: #212529;
            --bs-accordion-btn-bg: var(--bs-accordion-bg);
            --bs-accordion-btn-icon-width: 1.25rem;
            --bs-accordion-btn-focus-box-shadow: none;
        }

        .accordion-button::after {
            flex-shrink: 0;
            width: ;
            height: ;
            margin-left: auto;
            content: "";
            background-image: ;
            background-repeat: no-repeat;
            background-size: ;
            transition: ;
        }

        @media all and (min-width: 992px) {
            .navbar .nav-item .dropdown-menu {
                display: none;
            }

            .navbar .nav-item:hover .nav-link {}

            .navbar .nav-item:hover .dropdown-menu {
                display: block;
            }

            .navbar .nav-item .dropdown-menu {
                margin-top: 0;
            }
        }




        /* ------------------------ */
        /* .loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ffffff;
            transition: opacity 1s, visibility 1s;
        }
        
        .loader--hidden {
            opacity: 0;
            visibility: hidden;
        }
        
        .loader::after {
            content: "";
            width: 75px;
            height: 75px;
            border: 15px solid #dddddd;
            border-top-color: #009578;
            border-radius: 50%;
            animation: loading 5s ease infinite;
        }        
        
        @keyframes loading {
            from {
                transform: rotate(0turn);
            }

            to {
                transform: rotate(1turn);
            }
        } */
    </style>
</head>

<body style="background-color:#fffffc;">

    {{-- <div class="loader"></div> --}}

    <div class="container" style="width: 48%;">
        <nav class="navbar navbar-expand-sm">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}" style="font-weight:600;font-size: 1.5rem;">CandY</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="{{ url('/items') }}">Items</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('/gifting') }}">Gifting Items</a>
                                    <li>
                                    <li><a class="dropdown-item" href="#"> Personalized </a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/services') }}">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about') }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact.index') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    </div>


    <main>
        @yield('content')
    </main>
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item">
                            <a class="nav-link" href="{{ url('/') }}" aria-current="page">Home</a>
                        </li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item">
                            <a class="nav-link" href="{{ url('/services') }}">Services</a>
                        </li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="{{ url('/about') }}">About</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="{{ route('contact.index') }}">Contact</a></li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2023. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-facebook fs-3"></i></a>
                        </li>
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-twitter fs-3"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><i class="bi-instagram fs-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
@yield('customjs')
<script>
    window.addEventListener("load", () => {
        const loader = document.querySelector(".loader");
        loader.classList.add("loader--hidden");
        loader.addEventListener("transitionend", () => {
            document.body.removeChild(loader);
        });
    });
</script>

</html>
