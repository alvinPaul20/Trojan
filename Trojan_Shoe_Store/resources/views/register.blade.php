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
@section('title', 'Login - TROJAN')

@section('content')
<div class="container-fluid login mb-5">
            <div class="row justify-content-center">
                <div class="col-sm-3 d-flex justify-content-center flex-column ">
                    <div class="header-text mb-4 text-center">
                        <h2>
                          Create account
                        </h2>
                    </div>
                    <div class="input-group mb-3 w-100 ">
                      <input class="form-control form-control-md border border-dark " type="text" placeholder="Firstname" aria-label="name" >
                    </div>
                    <div class="input-group mb-3 w-100 ">
                      <input class="form-control form-control-md border border-dark " type="text" placeholder="Lastname" aria-label="name">
                    </div>
                    <div class="input-group mb-3 w-100 ">
                        <input class="form-control form-control-md border border-dark " type="text" placeholder="Email" aria-label="Email">
                      </div>
                      <div class="input-group mb-3 w-100 ">
                        <input class="form-control form-control-md border border-dark " type="password" placeholder="Password" aria-label="Password">
                      </div>
                    
                    <div class="btn justify-content-center mb-3">
                      <button type="button" class="btn btn-success Sign" style="width: 100px;"><a href="#" class="text-light">Sign up</a></button>
                    </div>
                    <div class="text-center">
                        <a href="login.html" style="text-decoration: underline;" class="text-success account ">Back to login</a>
                    </div>
                    
                </div>
            </div>
         </div>

@endsection
