@extends('layouts.main.menu')
@section('content')
    <section class="container mx-auto p-6 font-mono flex">
        {{--        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">--}}
        <div class="w-full overflow-x-auto flex-1">
            <a class="group block  max-w-xs mr-6 ml-6 rounded-lg p-6 bg-whitering-1 ring-gray-900/5 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500">
                <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 group-hover:text-white text-sm font-semibold text-3xl">新增病患回饋函</h3>
                </div>
                <p class="text-gray-500 group-hover:text-white text-sm">點擊此處新增</p>
            </a>
        </div>
        <div class="w-full overflow-x-auto flex-1">
            <a class="group block  max-w-xs mr-6 ml-6 rounded-lg p-6 bg-whitering-1 ring-gray-900/5 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500">
                <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 group-hover:text-white text-sm font-semibold text-3xl">新增藥師回饋函</h3>
                </div>
                <p class="text-gray-500 group-hover:text-white text-sm">點擊此處新增</p>
            </a>
        </div>
        <div class="w-full overflow-x-auto flex-1">
            <a class="group block  max-w-xs mr-6 ml-6 rounded-lg p-6 bg-whitering-1 ring-gray-900/5 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500">
                <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 group-hover:text-white text-sm font-semibold text-3xl">病患管理</h3>
                </div>
                <p class="text-gray-500 group-hover:text-white text-sm">點擊此處新增</p>
            </a>
        </div>
        <div class="w-full overflow-x-auto flex-1">
            <a class="group block  max-w-xs mr-6 ml-6 rounded-lg p-6 bg-whitering-1 ring-gray-900/5 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500">
                <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 group-hover:text-white text-sm font-semibold text-3xl">員工管理</h3>
                </div>
                <p class="text-gray-500 group-hover:text-white text-sm">點擊此處新增</p>
            </a>
        </div>
        {{--        </div>--}}
    </section>
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

@endsection
