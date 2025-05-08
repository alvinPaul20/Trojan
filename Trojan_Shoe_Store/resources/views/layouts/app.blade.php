<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TROJAN | SPORTS WEAR')</title>

    <!-- ✅ Offline Bootstrap CSS and Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">

    <!-- ✅ JS Bootstrap Bundle (defer so it loads after HTML) -->
    <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- ✅ Favicon -->
    <link rel="icon" href="{{ asset('images/logos.png') }}" type="image/x-icon">
    @stack('styles') {{-- Blade stack for pushing styles from child views --}}
</head>
<body>

    <!-- Top Banner -->
    <div class="container-fluid bg-success text-center text-light">
        Discounts up to 30% off! Free Shipping. Installment up to 6 months.
    </div>

    <!-- Navbar -->
    @include('partials.nav')

    <!-- Page content -->
    <main >
        @yield('content')
    </main>
        <!-- newsletter content -->
    @include('partials.newsletter')
    <!-- Footer -->
    @include('partials.footer')
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
</body>
</html>
