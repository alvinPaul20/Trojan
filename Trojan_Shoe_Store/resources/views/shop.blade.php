@extends('layouts.app')

@section('title', 'Home - TROJAN')

@section('content')
<div class="container-fluid ">
        <div class="title mb-5">
          <h2 class="shopAll text-center">
            Shop All
          </h2>
        </div>
      </div>
        
      <div class="container-xl  mb-5">
            <div class="row justify-content-center mb-5 items" id="root">
                            
              </div>             
          </div>
    
          <script src="{{ asset('js/data.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/cart.js') }}"></script>

@endsection
