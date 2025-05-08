@extends('layouts.app')

@section('title', 'Best Sellers - TROJAN')

@section('content')
<div class="main-head d-flex justify-content-center mb-5">
    <img src="{{ asset('images/cover4.jpg') }}" class="cover-image img-fluid" alt="">
    <div class="container text-success" id="cover-caption">
        <h3 class="text-dark text-lg-center mb-4">
            Bestseller products of the year 2023!
        </h3>
        <h5 class="fw-normal text-dark fs-4"> Exclusive items for you
        </h5>
        <br><br>
        <div class="container shop-box">
            <button type="button" class="btn btn-success btn-lg shop">Explore now</button>
        </div>
    </div>
</div>

<div class="container-xl mb-5">
    <div class="row justify-content-center mb-5 items" id="root">
        {{-- Product items will go here --}}
    </div>
</div>
<script src="{{ asset('js/data.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/cart.js') }}"></script>

@endsection
