@extends('layouts.main.login')
@include('layouts.navbar.drive')
@section('content')
    <body class="bg-gray-300">

        <div class="flex flex-col items-center justify-center min-h-screen">
            <div class="bg-white p-5 h-30 w-full max-w-lg border border-2">
                <h1 class="text-center font-mono text-gray-700 font-semibold">病患雲端系統</h1>
                <form class="flex flex-col">
                    <input type="text" class="p-2 my-2 rounded
                    border border-2 border-black" placeholder="帳號"/>
                    <input type="text" class="p-2 my-2 rounded
                     border border-2 border-black" placeholder="密碼" required/>
                    <button type="submit" class="outline outline-1
                     my-2 rounded bg-green-500 p-1 text-white">登入</button>
                </form>
            </div>
        </div>

    </body>
@endsection
