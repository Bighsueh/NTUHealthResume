@extends('layouts.main.drive')

@section('title')
    病患雲端系統
@endsection

@section('content')
    <div class="flex flex-column container w-full justify-center">
        <h1 class="text-2xl font-mono">病患回饋單</h1>
        <table class="table-auto border-collapse border border-gray-900">
            <thead class="p-2 bg-gray-700 text-white text-xl">
                <th>病患回饋單編號</th>
                <th>標題</th>
                <th>內容</th>
            </thead>
           <tr>
               <td>1</td>
               <td>title</td>
               <td>content</td>
           </tr>
            <tr>
                <td>2</td>
                <td>title2</td>
                <td>content2</td>
            </tr>

        </table>
    </div>
@endsection

