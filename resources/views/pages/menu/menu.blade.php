@extends('layouts.main.menu')
@section('content')
    <!-- content -->
    <div class="flex-1 p-10 text-2xl font-bold">
        @include('pages.menu.statusBar')
{{--        main page--}}
        <section class="container mx-auto p-6 font-mono">
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                        <tr class="text-md font-semibold tracking-wide text-left bg-gray-800 uppercase border-b border-gray-600">
                            <th class="px-4 py-3 text-gray-100">姓名</th>
                            <th class="px-4 py-3 text-gray-100">年齡</th>
                            <th class="px-4 py-3 text-gray-100">住址</th>
                            <th class="px-4 py-3 text-gray-100">功能</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white">
                        <tr class="text-gray-700 items-center">
                            <td class="px-4 py-3 border text-2xl">
                                王小明
                            </td>
                            <td class="px-4 py-3 text-ms font-semi border text-2xl">22</td>
                            <td class="px-4 py-3 border text-2xl">
                                雲林
                            </td>
                            <td class="px-4 py-3 text-xs border">
                                <button class="btn btn-outline-dark">123</button>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>



@endsection
