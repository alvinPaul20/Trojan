<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function deals() {
        return view('deals_page');
    }

    public function login() {
        return view('login');
    }

    public function cart() {
        return view('cart');
    }

    public function new() {
        return view('new');
    }

    public function bSellers() {
        return view('bSellers');
    }

    public function shop() {
        return view('shop');
    }

    public function reset() {
        return view('reset');
    }

    public function register() {
        return view('register');
    }
}
