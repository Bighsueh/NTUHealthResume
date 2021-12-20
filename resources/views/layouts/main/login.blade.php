<!doctype html>
<html lang="zh-TW">
<head>
    <meta charset="zh-Hant-TW">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>台大健康履歷網-登入介面</title>

    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-qrcode.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/sweetalert2@11.js')}}"></script>


    <link href="{{ asset('assets/css/tailwind.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">

</head>
<body class="bg-gradient-to-r from-blue-300 to-green-300">
    @yield('content')
</body>
</html>
