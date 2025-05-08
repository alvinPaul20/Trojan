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
}
/* above nav */

/* this part is footer */
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
.login{
  padding: 20px;
  height: 400px;
}
    </style>
@endpush
@section('title', 'Reset - TROJAN')

@section('content')
<div class="container-fluid login">
    <div class="row justify-content-center">
        <div class="col-sm-4 d-flex justify-content-center flex-column ">
            <div class="header-text mb-4 text-center">
                <h1>
                    Reset your password
                </h1>
                <br>
                <h5 class="text-secondary text-center" style="font-size: 14px;">
                    We will send you an email to reset your password
                </h5>
                <br>
            </div>
            <div class="input-group mb-5 w-100 ">
                <input class="form-control form-control-md border border-dark " type="text" placeholder="Email" aria-label="Email" >
            </div>                             
            <div class="btn justify-content-center">
                <button type="button" class="btn btn-success Sign" style="width: 100px;">
                    <a href="#" class="text-light">Submit</a>
                </button>
            </div>
            <div class="text-center mb-2">
                <a href="{{ url('login') }}" style="text-decoration: underline;" class="text-success account">Cancel</a>
            </div>
        </div>
    </div>
</div>

@endsection
