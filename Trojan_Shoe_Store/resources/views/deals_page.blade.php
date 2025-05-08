@extends('layouts.app')
@push('styles')
<style>
::-webkit-scrollbar{
  display: none;
}
body{
  margin: 0;
}
nav{
  padding: 3rem;
  font-size: larger;
}
ul{
  gap: 10px;
}
.navbar-brand{
  font-family: cursive;
  font-size: 4vh;
}
.nav-item{
  font-family: monospace;
}
.nav-item:hover{
  color: darkgreen;
  text-decoration: underline;
}
.form-icons{
  gap: 10px;
}
.icon{
  gap: 50px;
  align-content: center;
}
.icons{
  margin-top: 10px; 
}
.icons:hover{
  font-size: 1.3rem;
  transition: .07s;
}
.shopAll{
  color: rgb(19, 43, 19);
  padding: 20px 40px;
}
#size{
  width: 95%;
  padding: 5px;
  border: 2px solid rgb(19, 43, 19);
}
.title{
  color: rgb(19, 43, 19);
}
.cart{
  width: 98%;
}
.newsletter{
  padding: 50px;
}
.email input{
  width: 300px;
}
.main-head{
  width: 100%;
  height: 500px;
}
.main-head img{
  width: 100%;
  object-fit: cover;
}
#cover-caption{
  position: absolute;
  align-self:center;
  padding:10px;
  color:white;
  text-align: center;
}
/* footer */
#footer{
  background-color: rgb(19, 43, 19);
  color: white;
}
#footer .row{
  padding: 20px;
}
.brands{
  gap: 40px;
  align-content: center;
}
.brands a:hover{
  font-size: 1.4rem;
  transition: .03s;
}
.links{
  font-size: .9rem;
  font-weight: 300;
}
.links:hover{
  text-decoration: underline;
  font-weight: 400;
}
.credentials ul{
  font-size: .8rem;
  font-weight: 200;
}
.credentials ul li a:hover{
  text-decoration: underline;
  font-weight: 300;
}
.fa-plus, .fa-minus{
  cursor: pointer;
}
</style>
@endpush

@section('title', 'Weekly Deals - TROJAN')

@section('content')
<div class="main-head d-flex justify-content-center mb-5">
    <img src="{{ asset('images/cover3.jpg') }}" class="cover-image img-fluid" alt="Weekly Hot Deals Cover">
    <div class="container text-success" id="cover-caption">
        <h3 class="text-light text-lg-center mb-4">Weekly Hot Deals!</h3>
        <h5 class="fw-normal text-light fs-5">
            Made to have the best durability for your fitness and travels.
        </h5>
        <br><br>
        <div class="container shop-box">
            <a href="{{ url('/shop') }}" class="btn btn-success btn-lg shop">Explore now</a>
        </div>
    </div>
</div>

<div class="container-xl mb-5">
    <div class="row justify-content-center mb-5 items" id="root">
        {{-- Products will be injected here --}}
    </div>
</div>

    
<script src="{{ asset('js/data.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/cart.js') }}"></script>

@endsection
