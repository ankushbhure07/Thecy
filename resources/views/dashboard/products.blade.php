@extends('dashboard.layout.main')
@section('title')
    Dashboard
@endsection
@section('customcss')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Products</h1>
            <a href="{{ route('product.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Add Products</a>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                {{-- <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Product grid</h6>
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            
                                <div class="col-md-2">
                                    <div class="card text-start">
                                        <img class="card-img-top" src="" alt="Product_iamge">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h3 class="card-title"></p>
                                                </div>
                                                <div class="col-md-4">
                                                    <p class=""> <strong> <i> </i> </strong></p>
                                                </div>
                                                <div class="col-md-12">
                                                    <h3 class="card-title"></p>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="" class="btn btn-warning">Update</a>
                                                <a href="" class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div> --}}
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                    </div>
                    <div class="container">
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
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Type</th>
                                        <th>Size</th>
                                        <th>Gender</th>
                                        <th>Color</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        // dd(DB::table('products')->where('product_size', null)->get());
                                    @endphp
                                    @foreach ($product as $pro)                                       
                                        <tr>
                                            <td>{{ $pro->product_name }}</td>
                                            <td>{{ $pro->product_price }}</td>
                                            <td>{{ $pro->product_type }}</td>
                                            <td>{{ $pro->product_size }}</td>
                                            <td>
                                                @if ($pro->gender == 'M')
                                                    Male
                                                @endif
                                                @if ($pro->gender == 'F')
                                                    Female
                                                @endif
                                                @if ($pro->gender == 'U')
                                                    Unisex
                                                @endif
                                            </td>
                                            <td><button class="form-control" disabled="disabled"
                                                    style="background: {{ $pro->product_color }};"></button></td>
                                            <td>{{ $pro->product_desc }}</td>
                                            <td>
                                                <img src="public/product_image/{{ $pro->product_image }}" alt=""
                                                    style="width: 50px;">
                                            </td>
                                            <td>
                                                <form method="POST" action="{{ route('product.destroy', $pro->id) }}">
                                                <a href="{{ route('product.edit', $pro->id) }}"
                                                    class="btn btn-warning">Update</a>
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('customjs')
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <script>
        setTimeout(function() {
            $('.alert').fadeOut('fast');
        }, 30000); // <-- time in milliseconds
    </script>
@endsection
