@extends('layouts.app')
@push('styles')
 <style>
          
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
  font-family:cursive;
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
}.newsletter{
  padding: 50px;}
  .email input{
  width: 300px;
}
.title{
    color:  rgb(19, 43, 19);
    padding: 40px 40px;
}
.back a{
    color:  rgb(19, 43, 19);
    font-weight: 600;
    font-size: large;
}
.back:hover{
    text-decoration:2px underline ;
}
.delete{
  cursor: pointer;
  color: red;}

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
@section('title', 'Cart - TROJAN')

@section('content')
<div class="container-fluid title d-flex">
    <h1 class="me-auto">Your shopping cart </h1>
    <div class="back"><a href="{{ url('/shop') }}">Continue shopping</a></div>
</div> 
<div class="row mb-3 " id="label">
  <div class="col-md-6 col-4 fs-5 text-secondary px-5  border-bottom border-dark">Products</div>
  <div class="col-md-3 col-4 fs-5 text-secondary text-start border-bottom border-dark">Quantity</div>
  <div class="col-md-3 col-4 fs-5 text-secondary text-end px-5 border-bottom border-dark">Total</div>
</div>
<div class="container-fluid mb-3 overflow-auto" style="height: 500px;" id="cartItems">
   
    
</div>
<div id="total">
</div>
<script src="{{ asset('js/data.js') }}"></script>
<script src="{{ asset('js/cart.js') }}"></script>

@endsection
