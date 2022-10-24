@extends('layouts.app')
@section('title', 'Seller list')

@push('after-scripts')
@endpush

@section('content')
    {{-- <div class="container">
        <div class="row col-12">
            @livewire('sellers')
        </div>
    </div> --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Seller List</h2>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @livewire('sellers')

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
