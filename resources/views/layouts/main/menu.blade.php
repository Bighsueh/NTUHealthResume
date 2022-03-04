<!doctype html>
<html lang="zh-TW">
<head>
    <meta charset="zh-Hant-TW">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>台大用藥營養追蹤系統</title>

    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-qrcode.min.js')}}"></script>
{{--    <script src="{{asset('assets/js/bootstrap.js')}}"></script>--}}
    <script src="{{asset('assets/js/sweetalert2@11.js')}}"></script>
{{--    <script type="text/javascript" src="{{ asset('assets/js/font-awesome.js') }}"></script>--}}
    <script type="text/javascript" src="{{ asset('assets/js/tailwind.min.js') }}"></script>

    <link href="{{ asset('assets/css/tailwind.min.css') }}" rel="stylesheet" type="text/css">
{{--    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">--}}
{{--    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</head>
<body class="">

<div class="relative min-h-screen md:flex">
    @include('layouts.navbar.sidebar')
    @yield('content')
</div>
</body>
</html>
