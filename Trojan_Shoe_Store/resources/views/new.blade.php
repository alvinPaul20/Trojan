@extends('layouts.app')

@section('title', 'New Deals - TROJAN')

@section('content')
<div class="main-head d-flex justify-content-center mb-5">
    <img src="{{ asset('images/cover6.jpg') }}" class="cover-image img-fluid" alt="">

    <div class="container text-success" id="cover-caption">
        <h3 class="text-light text-xl-center fs-1 mb-4">
            Exciting New Arrivals!
        </h3>
        <h5 class="fw-normal text-light fs-4">
            New style for a new day and discover our new lightweight shoes designed for travelling
        </h5>
        <br><br>
        <div class="container shop-box">
            <button type="button" class="btn btn-success btn-lg shop">
                <a href="{{ route('shop') }}" class="text-light text-decoration-none">Explore now</a>
            </button>
        </div>
    </div>
</div>

<div class="container-xl mb-5">
    <div class="row justify-content-center mb-5 items" id="root">
    </div>
</div>

<script src="{{ asset('js/data.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/cart.js') }}"></script>

@endsection
