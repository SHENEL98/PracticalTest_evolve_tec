@extends('layouts.app')
@section('title', 'Seller Details')

@push('after-scripts')

@endpush

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Seller Details</h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Seller Name</th>
                                    <td>{{ $seller->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email </th>
                                    <td>{{ $seller->mail }}</td>
                                </tr>
                                <tr>
                                    <th>Phone number</th>
                                    <td>{{ $seller->phone }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Seller's Product Details</h3>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @php
                            $sellerId = $seller->id;
                        @endphp
                        @livewire('products', ['sellerId' => $sellerId])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
