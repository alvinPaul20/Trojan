@extends('layouts.app')

@section('title', 'Account Details')

@section('content')
<div class="container">
    <div class="page-inner">


        <div class="row">
            <div class="col-md-8">
                <!-- Display user's details -->
                <h2>Hello, {{ Auth::user()->name }}!</h2>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Account Information</h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <strong>Name:</strong> {{ Auth::user()->name }}
                            </li>
                            <li class="list-group-item">
                                <strong>Email:</strong> {{ Auth::user()->email }}
                            </li>
                            <li class="list-group-item">
                                <strong>Password:</strong> ******** 
                            </li>
                            <li class="list-group-item">
                                <strong>Account Created:</strong> {{ Auth::user()->created_at->format('M d, Y') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
