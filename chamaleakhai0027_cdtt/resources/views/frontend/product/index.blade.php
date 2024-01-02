<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('images/logo0.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/vendor/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/vendor/MagnificPopup/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/cozastore/css//style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Các custom style của frontend -->
    <link rel="stylesheet" href="{{ asset('themes/cozastore/css/custom-styles.css') }}">

    <!-- Các custom style dành riêng cho từng view -->
    @yield('custom-css')

</head>
@include('layouts.home.header')

@include('frontend.photomanagement.product-list')

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
@endsection
</html>