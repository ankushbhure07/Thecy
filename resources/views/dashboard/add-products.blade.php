@extends('dashboard.layout.main')
@section('title')
    Dashboard
@endsection
@section('customcss')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Products</h1>
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
                            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="product_name" id=""
                                                value="{{ old('product_name') }}">
                                            @error('product_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Price</label>
                                            <input type="number" class="form-control" name="product_price"
                                                value="{{ old('product_price') }}">
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
                                                <option value="Upper" @if(old('product_type') == 'Upper') selected @endif>Upper wear</option>
                                                <option value="Lower" @if(old('product_type') == 'Lower') selected @endif>Lower</option>
                                                <option value="Head" @if(old('product_type') == 'Head') selected @endif>Head wear</option>
                                                <option value="Gifting" @if(old('product_type') == 'Gifting') selected @endif>Gifting Item</option>
                                                <option value="Personalized" @if(old('product_type') == 'Personalized') selected @endif>Personalized</option>
                                                <option value="Professional" @if(old('product_type') == 'Professional') selected @endif>Professional</option>
                                            </select>
                                            @error('product_type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Sizes</label>
                                        <div class="d-flex">
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="checkbox" name="product_size[]"
                                                    value="S">
                                                <label class="form-check-label ml-0" for="">S</label>
                                            </div>
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="checkbox" name="product_size[]"
                                                    value="M">
                                                <label class="form-check-label ml-0" for="">M</label>
                                            </div>
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="checkbox" name="product_size[]"
                                                    value="L">
                                                <label class="form-check-label ml-0" for="">L</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 d-flex">
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="checkbox" name="product_size[]"
                                                    value="XL">
                                                <label class="form-check-label ml-0" for="">XL</label>
                                            </div>
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="checkbox" name="product_size[]"
                                                    value="XXL">
                                                <label class="form-check-label ml-0" for="">XXL</label>
                                            </div>
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="checkbox" name="product_size[]"
                                                    value="XXXL">
                                                <label class="form-check-label ml-0" for="">XXXL</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Gender</label>
                                        <div class="mb-3 d-flex">
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    value="M">
                                                <label class="form-check-label ml-0" for="">Male</label>
                                            </div>
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    value="F">
                                                <label class="form-check-label ml-0" for="">Female</label>
                                            </div>
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    value="U">
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
                                                id="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Description</label>
                                                <textarea class="form-control" name="product_desc" id="" rows="3"></textarea>
                                                @error('product_desc')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Choose file</label>
                                            <input type="file" class="form-control" name="product_image"
                                                id="">
                                            @error('product_image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{ route('product.index') }}" class="btn btn-outline-primary">Back</a>
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
