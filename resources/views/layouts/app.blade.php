<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="CodePixar">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>@yield('title', 'Karma Shop')</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/fav.png') }}">

    {{-- CSS Files --}}
    <link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ion.rangeSlider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ion.rangeSlider.skinFlat.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>
<body>

    {{-- Header --}}
    @include('partials.header')

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('partials.footer')

    {{-- JS Files --}}
    <script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js')}}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>
	<script src="{{ asset('assets/js/nouislider.min.js')}}"></script>
	<script src="{{ asset('assets/js/countdown.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->
	<script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE')}}"></script>
	<script src="{{ asset('assets/js/gmaps.min.js')}}"></script>
	<script src="{{ asset('assets/js/main.js')}}"></script>

    {{-- Optional Page Scripts --}}
    @yield('scripts')

</body>
</html>
