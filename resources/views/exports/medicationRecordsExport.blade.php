<table>
    <thead>
    <tr>
        <th>record_id(禁止修改)</th>
        <th>date_of_examination</th>
        <th>redate</th>
        <th>pres_hosp</th>
        <th>disp_hosp</th>
        <th>trade_name</th>
        <th>generic_name</th>
        <th>dose</th>
        <th>freq</th>
    </tr>
    </thead>
    <tbody>
    @if(count($data)>=1)
        @foreach($data as $row)
            <tr>
                <td>{{ $row->record_id }}</td>
                <td>{{ $row->date_of_examination }}</td>
                <td>{{ $row->redate }}</td>
                <td>{{ $row->pres_hosp }}</td>
                <td>{{ $row->disp_hosp }}</td>
                <td>{{ $row->trade_name }}</td>
                <td>{{ $row->generic_name }}</td>
                <td>{{ $row->dose }}</td>
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
