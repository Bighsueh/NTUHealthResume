<!doctype html>
<html lang="zh-TW">
<head>
    <meta charset="zh-Hant-TW">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>台大健康履歷網</title>

    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-qrcode.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/sweetalert2@11.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/font-awesome.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/tailwind.min.js') }}"></script>

    <link href="{{ asset('assets/css/tailwind.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">

</head>
<body class="">
@include('layouts.navbar.menu')
@yield('content')
</body>
</html>
