<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TROJAN | SPORTS WEAR')</title>

    <!-- ✅ CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/kaiadmin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}">

    <link rel="icon" href="{{ asset('images/logos.png') }}" type="image/x-icon">

    @stack('styles')
</head>

<body>
@include('admin.partials.header')
    <div class="wrapper d-flex justify-content-center align-items-center">
        @include('admin.partials.navbar')
        

        @yield('content')
    </div>

    <!-- ✅ JS -->
    <script src="{{ asset('js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/kaiadmin.js') }}"></script>
    <script src="{{ asset('js/data.js') }}"></script>
    <script src="{{ asset('js/cart.js') }}"></script>

    <!-- Optional: Demo Script -->
    <script src="{{ asset('js/setting-demo2.js') }}"></script>

    <script>
        $("#displayNotif").on("click", function () {
            var placementFrom = $("#notify_placement_from option:selected").val();
            var placementAlign = $("#notify_placement_align option:selected").val();
            var state = $("#notify_state option:selected").val();
            var style = $("#notify_style option:selected").val();
            var content = {
                message: 'Turning standard Bootstrap alerts into "notify" like notifications',
                title: "Bootstrap notify",
                icon: style === "withicon" ? "fa fa-bell" : "none",
                url: "index.html",
                target: "_blank"
            };

            $.notify(content, {
                type: state,
                placement: {
                    from: placementFrom,
                    align: placementAlign
                },
                time: 1000
            });
        });
    </script>

    @stack('scripts')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
</body>
</html>
