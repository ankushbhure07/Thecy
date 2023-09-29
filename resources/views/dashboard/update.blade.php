@extends('dashboard.layout.main')
@section('title')
    Dashboard
@endsection
@section('customcss')
    <style>
        .dataTable_filter {
            text-align: right !important;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Products</h1>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Add Products</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="container">
                            <form action="{{ route('product.update', $update->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="product_name" id=""
                                                value="{{ $update->product_name }}">
                                            @error('product_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Price</label>
                                            <input type="number" class="form-control" name="product_price"
                                                value="{{ $update->product_price }}">
                                            @error('product_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Type</label>
                                            <select class="form-control" name="product_type" id="tagInput">
                                                {{-- <option Selected> </option> --}}
                                                <option disabled selected>Choose The Item</option>
                                                <option value="Upper" @if ($update->product_type == 'Upper') selected @endif>
                                                    Upper wear</option>
                                                <option value="Lower" @if ($update->product_type == 'Lower') selected @endif>
                                                    Lower</option>
                                                <option value="Head" @if ($update->product_type == 'Head') selected @endif>
                                                    Head wear</option>
                                                <option value="Gifting" @if ($update->product_type == 'Gifting') selected @endif>
                                                    Gifting Item</option>
                                                <option value="Personalized"
                                                    @if ($update->product_type == 'Personalized') selected @endif>Personalized</option>
                                                <option value="Professional"
                                                    @if ($update->product_type == 'Professional') selected @endif>Professional</option>
                                            </select>
                                            @error('product_type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Sizes</label>
                                        @php
                                            if ($update->product_size) {
                                                $convert = json_decode($update->product_size);
                                                $allSizes = ['S', 'M', 'L', 'XL', 'XXL', 'XXXL'];
                                                $topGroup = ['S', 'M', 'L'];
                                                $bottomGroup = ['XL', 'XXL', 'XXXL'];                                                
                                            }                                            
                                        @endphp
                                        <div class="d-flex">
                                            @if ($update->product_size)
                                                @foreach ($topGroup as $size)
                                                    <div class="form-check mr-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="product_size[]" value="{{ $size }}"
                                                            {{ in_array($size, $convert) ? 'checked' : '' }}>
                                                        <label>{{ $size }}</label><br>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="d-flex">
                                                    <div class="form-check mr-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="product_size[]" value="S">
                                                        <label class="form-check-label ml-0" for="">S</label>
                                                    </div>
                                                    <div class="form-check mr-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="product_size[]" value="M">
                                                        <label class="form-check-label ml-0" for="">M</label>
                                                    </div>
                                                    <div class="form-check mr-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="product_size[]" value="L">
                                                        <label class="form-check-label ml-0" for="">L</label>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>

                                        <!-- Bottom Group -->
                                        <div class="d-flex">
                                            @if ($update->product_size)
                                                @foreach ($bottomGroup as $size)
                                                    <div class="form-check mr-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="product_size[]" value="{{ $size }}"
                                                            {{ in_array($size, $convert) ? 'checked' : '' }}>
                                                        <label>{{ $size }}</label><br>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="mb-3 d-flex">
                                                    <div class="form-check mr-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="product_size[]" value="XL">
                                                        <label class="form-check-label ml-0" for="">XL</label>
                                                    </div>
                                                    <div class="form-check mr-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="product_size[]" value="XXL">
                                                        <label class="form-check-label ml-0" for="">XXL</label>
                                                    </div>
                                                    <div class="form-check mr-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="product_size[]" value="XXXL">
                                                        <label class="form-check-label ml-0" for="">XXXL</label>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Gender</label>
                                        <div class="mb-3 d-flex">
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    @if ($update->gender == 'M') checked @endif value="M">
                                                <label class="form-check-label ml-0" for="">Male</label>
                                            </div>
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    @if ($update->gender == 'F') checked @endif value="F">
                                                <label class="form-check-label ml-0" for="">Female</label>
                                            </div>
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    @if ($update->gender == 'U') checked @endif value="U">
                                                <label class="form-check-label ml-0" for="">Unisex</label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-3">
                                        Gift Item?
                                        <div class="mb-3">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    value="yes">
                                                <label class="form-check-label" for="">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    value="no">
                                                <label class="form-check-label" for="">No</label>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Choose Color</label>
                                            <input type="color" class="form-control" name="product_color"
                                                value="{{ $update->product_color }}" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Description</label>
                                                <textarea class="form-control" name="product_desc" id="" rows="3"> {{ $update->product_desc }}</textarea>
                                                @error('product_desc')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Choose file</label>
                                            <input type="file" class="form-control" name="product_image"
                                                value="{{ $update->product_image }}" id="">
                                            <input type="hidden" name="old_product_image"
                                                value="{{ $update->product_image ?? ' ' }}">
                                            @error('product_image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <img src="../../public/product_image/{{ $update->product_image }}" alt=""
                                                style="width: 8rem;">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Product Details</label>
                                                <textarea class="form-control" name="product_details" id="" rows="3">{{ $update->product_details }}</textarea>
                                                @error('product_details')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-warning">Update</button>
                                        <a href="{{ route('product.index') }}" class="btn btn-outline-warning">Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('customjs')
@endsection
