@extends('layouts.main.login')
@include('layouts.navbar.drive')
@section('content')
    <body class="bg-gray-300">

        <div class="flex flex-col items-center justify-center min-h-screen">
            <div class="bg-white p-5 h-30 w-full max-w-lg border border-2">
                <h1 class="text-center font-mono text-gray-700 font-semibold">病患雲端系統</h1>
                <form class="flex flex-col">
                    <input type="text" id="username" class="p-2 my-2 rounded
                    border border-2 border-black" placeholder="帳號"/>
                    <input type="text" id="password" class="p-2 my-2 rounded
                     border border-2 border-black" placeholder="密碼" required/>
                    <button type="button" id="btn_login" class="outline outline-1
                     my-2 rounded bg-green-500 p-1 text-white">登入</button>
                </form>
            </div>
        </div>

    </body>
    <script>
        //btn_login click
        $("#btn_login").click(function () {
            let url = '{{route('post_drive_login_data')}}';
            let username = $("#username").val();
            let password = $("#password").val();
            $.ajax({
                url: url,
                method: 'post',
                data: {
                    _token: "{{ csrf_token() }}",
                    username: username,
                    password: password,
                },
                success: function (res) {
                    if (res === 'wrong') wrong();
                    if (res === 'success') success();
                },
                error: function (res) {
                    console.log(res);
                    failed();
                }
            })
        })

        function success() {
            Swal.fire({
                icon: 'success',
                title: '登入成功',
                text: '即將跳轉頁面',
                confirmButtonColor: '#8CD4F5'
            })
            window.location.replace("{{route('get_drive_page')}}");
        }

        function wrong() {
            Swal.fire({
                icon: 'error',
                title: '帳號或密碼錯誤',
                text: '請重新輸入帳密',
                confirmButtonColor: '#8CD4F5'
            })
        }

        function failed() {
            Swal.fire({
                icon: 'warning',
                title: '連線失敗!!',
                text: '若仍無法連線請聯絡系統管理員',
                confirmButtonColor: '#8CD4F5'
            })
        }
    </script>
@endsection
