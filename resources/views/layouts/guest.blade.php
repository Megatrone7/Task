<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="club">
    <meta name="author" content="design by: webelitee@gmail.com">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('assets/shop/image/logo-en.png') }}" type="image/x-icon">

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate-css/vivify.min.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@200;400;700;900&display=swap" rel="stylesheet">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/1/css/site.min.css') }}">
</head>

<body class="theme-orange">

    {{ $slot }}

    <!-- VENDOR CSS -->
    <script src="{{ asset('assets/admin/assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/bundles/mainscripts.bundle.js') }}"></script>
</body>

</html>
