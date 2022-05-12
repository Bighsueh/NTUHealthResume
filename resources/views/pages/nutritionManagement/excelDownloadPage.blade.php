<table>
    <thead>
    <tr>
        <th>餐序</th>
        <th>餐序建立時間</th>
        <th>餐序修改時間</th>
        <th>菜色</th>
        <th>份量</th>
        <th>備註</th>
    </tr>
    </thead>
    <tbody>
    {{-- 欄位合併要做   --}}
{{--    $order_lists[0]->diet_logs->count()--}}
    @foreach($data as $index => $d)
        <tr>
{{--            {{dd($od->diet_logs->count())}}--}}
            <td>{{ $d->meal_order }}</td>
            <td>{{ $d->created_at }}</td>
            <td>{{ $d->updated_at }}</td>
            <td>{{ $d->meal_name }}</td>
            <td>{{ $d->quantity }}</td>
            <td>{{ $d->remark }}</td>

        </tr>
    @endforeach
{{--    {{dd()}}--}}
    </tbody>

</table>
