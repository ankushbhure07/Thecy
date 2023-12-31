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
            background: url("public/assets/img/contact.png") no-repeat center center;
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

        .form-group {
            margin-bottom: 10px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
        }

        #formSubmit {
            background-color: #000;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            text-align: center;
        }

        #formSubmit:hover {
            background-color: #000000;
        }

        #formSubmit:active {
            background-color: #2a2929 !important;
        }

        .details {
            margin: 6rem 0 4rem 0;
        }

        .details .fa-solid {
            font-size: 1.6rem;
        }

        #submitBtn {
            text-align: left;
            margin-top: auto;
        }

        @media screen and (max-width: 761px) {
            #submitBtn {
                text-align: center;
                margin-top: auto;
            }

            #name {
                margin-bottom: 1rem;
            }

            #mobileNo {
                margin-bottom: 1rem;
            }

            .det {
                margin-bottom: 1rem;
            }
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
        <div class="container" style="width:65%;">
            <div class="details">
                <div class="row text-center">
                    <div class="col-md-4 det">
                        <i class="fa-solid fa-location-dot"></i><br>
                        <strong>Address:- Near Saraswati Lawn Nara, Nagpur 440014.</strong>
                    </div>
                    <div class="col-md-4 det">
                        <i class="fa-solid fa-phone"></i><br>
                        <strong>Number:- 1234567890</strong>
                    </div>
                    <div class="col-md-4 det">
                        <i class="fa-solid fa-envelope"></i><br>
                        <strong>Email:- contact@thecy.com</strong>
                    </div>
                </div>
            </div>


            <!-- Button trigger modal -->
            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button> --}}

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            Thankyou For Contacting we will contact you soon...
                        </div>
                    </div>
                </div>
            </div>

            @if (session('success'))
                <div class="w-20 alert alert-success text-center mt-2">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('fail'))
                <div class="w-20 alert alert-danger text-center mt-2">
                    {{ session('fail') }}
                </div>
            @endif
            <form action="{{ route('contact.store') }}" method="POST" style="margin-bottom: 2rem;">
                @csrf
                <div class="row">
                    <div class="row mb-3">
                        <div class="col-md-6" id="name">
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                                placeholder="Name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                placeholder="Email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6" id="mobileNo">
                            <input type="number" name="number" class="form-control" value="{{ old('number') }}"
                                placeholder="Mobile Number">
                            @error('number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6" id="">
                            <select class="form-select" name="fabric" id="">
                                <option selected>Select Types of tshirt</option>
                                <option value="cotton">Pure Cotton(100%)</option>
                                <option value="polystar">Polystar</option>
                                <option value="mix">Mix Matrial</option>
                                <option value="spunMatty">Spun Matty</option>
                            </select>
                            @error('fabric')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6" id="">
                            <textarea class="form-control" name="inquiry" id="" rows="3" placeholder="Inquiry for??"></textarea>
                            @error('inquiry')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Can We Call??</label>
                            <div class="mb-3 d-flex">
                                <div class="form-check" style="margin-right: 30px;">
                                    <input class="form-check-input" type="radio" name="canwecall" value="yes">
                                    <label class="form-check-label ml-0" for="">Yes</label>
                                </div>
                                <div class="form-check" style="margin-right: 35px;">
                                    <input class="form-check-input" type="radio" name="canwecall" value="no">
                                    <label class="form-check-label ml-0" for="">No</label>
                                </div>
                            </div>
                            @error('canwecall')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" id="formSubmit">Submit</button>
            </form>
        </div>
    </div>
@endsection
@section('customjs')
    <script></script>
@endsection
