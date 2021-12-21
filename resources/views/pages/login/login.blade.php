@extends('layouts.main.login')
@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen">
        <div class="bg-gradient-to-r from-green-300 to-blue-300 w-full sm:w-3/4 max-w-lg p-12 pb-6 shadow-2xl rounded">
            <div class="text-white pb-4 text-3xl font-semibold">台大健康履歷網</div>
            <input
                class="block text-gray-700 p-1 m-4 ml-0 w-11/12 rounded text-lg font-normal placeholder-gray-500"
                id="username"
                type="text"
                placeholder="  帳號"
            />
            <input
                class="block text-gray-700 p-1 m-4 ml-0 w-11/12 rounded text-lg font-normal placeholder-gray-500"
                id="password"
                type="password"
                placeholder="  密碼"
            />
            <button id="btn_login"
                    class="inline-block mt-2 bg-green-500 hover:bg-green-600 focus:bg-green-800 px-6 py-2 rounded text-white shadow-lg float-right"
            >
                登入
            </button>
        </div>
    </div>
    <script>
        //btn_login click
        $("#btn_login").click(function () {
            let url = '{{route('post_login_data')}}';
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
        function success(){
            Swal.fire({
                icon: 'success',
                title: '登入成功',
                text: '即將跳轉頁面',
                confirmButtonColor: '#8CD4F5'
            })
            window.location.replace("{{route('menu')}}");
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
