<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('assets/forntend/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/forntend/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/forntend/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/forntend/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/forntend/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/forntend/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/forntend/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/forntend/css/style.css') }}" type="text/css">
</head>

<body class="bg-light container-fluid">
    <!-- Page Preloder -->
    @include('components.forntend.partials.header')
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    {{ $slot }}

    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    @include('components.forntend.partials.footer')


    @stack('script');

</body>

</html>