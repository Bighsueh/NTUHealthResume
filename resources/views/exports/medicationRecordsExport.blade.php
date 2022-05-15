<table>
    <thead>
    <tr>
{{--        <th>病例id(禁止修改)</th>--}}
        <th>就醫日</th>
        <th>開方日期</th>
        <th>處方醫院</th>
        <th>調劑醫院</th>
        <th>藥品商品名稱</th>
        <th>藥品成分名稱</th>
        <th>單位劑量</th>
        <th>顆、包數或c.c.</th>
        <th>每日劑量</th>
        <th>頻率</th>
    </tr>
    </thead>
    <tbody>
    @if(count($data)>=1)
        @foreach($data as $row)
            <tr>
{{--                <td>{{ $row->record_id }}</td>--}}
                <td>{{ $row->date_of_examination }}</td>
                <td>{{ $row->redate }}</td>
                <td>{{ $row->pres_hosp }}</td>
                <td>{{ $row->disp_hosp }}</td>
                <td>{{ $row->trade_name }}</td>
                <td>{{ $row->generic_name }}</td>
                <td>{{ $row->dose }}</td>
                <td>{{ $row->dose_per_unit }}</td>
                <td>{{ $row->daily_dose}}</td>
                <td>{{ $row->freq }}</td>
            </tr>
        @endforeach
    @endif
    @if(count($data)==0)
        <tr>
            <td colspan="6">無資料</td>
        </tr>
    @endif
    </tbody>
</table>
