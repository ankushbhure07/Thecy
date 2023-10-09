@extends('layouts.main')
@section('title')
    Customization & You
@endsection
@section('customcss')
    <style>
        #allItems a {
            color: #18272F;
            position: relative;
            text-decoration: none;
            font-size: 2.5rem;
            color: #956943;
        }

        #allItems a::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 4px;
            border-radius: 4px;
            background-color: #c89364;
            bottom: 0;
            left: 0;
            transform-origin: right;
            transform: scaleX(0);
            transition: transform .3s ease-in-out;
        }

        #allItems a:hover::before {
            transform-origin: left;
            transform: scaleX(1);
        }

        a:hover,
        #allItems a:hover {
            color: #c89364;
            transition: 0.25s ease-in-out;
        }

        hr {
            margin: 4px !important;
        }

        @media (max-width: 320px) {
            .showcase .showcase-text {
                padding: 0.5rem !important;
            }

            .item-font {
                font-size: 6px;
            }

            #rs {
                font-size: 16px !important;
            }

            #allItems a {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 1024px) {
            .item-font {
                font-size: 19px;
            }
        }

        @media (max-width: 425px) {
            .item-font {
                font-size: 16px;
            }

            .col-6 {
                padding: 0;
            }
        }

        .fa-star {
            color: #ff1b1b;
            font-size: 3.5rem;
        }

        .pro {
            padding-right: 6px;
            box-shadow: 8px 8px 0px 0px #ff1b1b;
        }

        .circle-icon {
            font-size: 1.2rem;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid #000000;            
            transition: 0.2s ease-in-out;
        }

        .circle-icon:hover {
            color: #ff1b1b;
            border: 2px solid #ff1b1b;
        }
    </style>
@endsection
@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <!-- Page heading-->
                        <h1 class="mb-5">"Your Style, Your Statement: Unleash the Power of Personalized Fashion"</h1>
                        <!-- Signup form-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        {{-- <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row">
                                <div class="col">
                                    <input class="form-control form-control-lg" id="emailAddress" type="email"
                                        placeholder="Email Address" data-sb-validations="required,email" />
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:required">Email
                                        Address is required.</div>
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:email">Email
                                        Address Email is not valid.</div>
                                </div>
                                <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton"
                                        type="submit">Submit</button></div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    <p>To activate this form, sign up at</p>
                                    <a class="text-white"
                                        href=""></a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Icons Grid-->
    <section class="features-icons text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-window m-auto"></i></div>
                        <h3>Product Quality</h3>
                        <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-layers m-auto"></i></div>
                        <h3>Services</h3>
                        <p class="lead mb-0">Featuring the latest build of the new Bootstrap 5 framework!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto"></i></div>
                        <h3>cost-effective</h3>
                        <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Image Showcases-->
    <section class="showcase">
        <h1 class="mt-3 mb-4 text-center" style="font-weight: 600; color:#000000;"><strong>Some of our </strong><span
                class="pro">Products</span></h1>
        <div class="container-fluid p-0" id="images" style="width: 90%;">
            <div class="row g-0">
                @foreach ($product as $item)
                    <div class="col-6 col-md-4 col-lg-3 order-lg-1 showcase-text">
                        <a href="{{ route('single', $item->id) }}">
                            <img src="public/product_image/{{ $item->product_image }}" class="img-fluid" alt="">
                        </a>
                        <div class="row justify-content-center align-items-center g-2 mt-1">
                            <div class="col-6">
                                <h3 class="item-font" style="text-align: left;">{{ $item->product_name }}</h3>
                            </div>
                            <div class="col-6">
                                <h3 class="item-font" style="text-align: right;"> {{ $item->product_type }} </h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-0" style="font-weight: 400" id="rs">₹ {{ $item->product_price }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- <div class="container text-center mt-5 mb-5" id="allItems">
            <a href="{{ url('/items') }}">All Items <i class="fa-solid fa-arrow-right"></i></a>
        </div> --}}
    </section>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12 col-lg-12 col-sm-12 text-center">
                <h1 style="font-size: 6rem; color: black; margin-bottom: 2rem;"> <strong>Our <br> Services</strong></h1>
                <p style="color: #3e3b3b;">We offer high-quality, cost-effective products that suit your brand
                    identity.</p>
            </div>
            <div class="col-12 col-lg-12 col-sm-12">
                <div class="row">
                    <div class="col-4 text-center mt-4" style="border-right: 4px solid black;">
                        <i class="fa-regular fa-star"></i><br><br>
                        <h3>Product Quality</h3>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In corporis sequi atque.</p>
                        {{-- <div class="circle-icon">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div> --}}
                    </div>
                    <div class="col-4 text-center mt-4" style="border-right: 4px solid black;">
                        <i class="fa-regular fa-star"></i><br><br>
                        <h3>Product Quality</h3>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In corporis sequi atque.</p>
                        {{-- <div class="circle-icon">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div> --}}
                    </div>
                    <div class="col-4 text-center mt-4">
                        <i class="fa-regular fa-star"></i><br><br>
                        <h3>Product Quality</h3>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In corporis sequi atque.</p>
                        {{-- <div class="circle-icon">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials-->
    <section class="testimonials text-center">
        <div class="container">
            <h2 class="mb-5">What people are saying...</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="public/assets/img/testimonials-1.jpg"
                            alt="..." />
                        <h5>Margaret E.</h5>
                        <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="public/assets/img/testimonials-2.jpg"
                            alt="..." />
                        <h5>Fred S.</h5>
                        <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super
                            nice landing pages."</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="public/assets/img/testimonials-3.jpg"
                            alt="..." />
                        <h5>Sarah W.</h5>
                        <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action-->
    {{-- <section class="call-to-action text-white text-center" id="signup">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <h2 class="mb-4">Ready to get started? Sign up now!</h2>
                    <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                        <!-- Email address input-->
                        <div class="row">
                            <div class="col">
                                <input class="form-control form-control-lg" id="emailAddressBelow" type="email"
                                    placeholder="Email Address" data-sb-validations="required,email" />
                                <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">
                                    Email Address is required.</div>
                                <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Email
                                    Address Email is not valid.</div>
                            </div>
                            <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton"
                                    type="submit">Submit</button></div>
                        </div>

                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                <p>To activate this form, sign up at</p>
                                <a class="text-white"
                                    href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>

                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
@endsection

@section('footer')
    <!-- Footer-->
@endsection
