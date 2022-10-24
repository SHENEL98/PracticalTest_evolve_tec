@extends('layouts.app')
@section('title', 'Seller list')

@push('after-scripts')
@endpush

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Practical Test for Software Engineer - Evolve Tec.</h2>
                    </div>
                    <div class="card-body">
                        <a   href="{{ url('seller') }}">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            View All Sellers
                        </button>
                        </a>
                        <hr>
                        <table class="table table-bordered mt-5">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Seller Name</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->qty }}</td>
                                        <td>{{ $product->seller->name }}</td>
                                        <td>
                                            <a href="{{ url('seller') }}/{{ $product->seller->id }}" data-toggle="tooltip"
                                                data-placement="top" title="View Seller Details" class="btn btn-info"> View
                                            </a>
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
@endsection
