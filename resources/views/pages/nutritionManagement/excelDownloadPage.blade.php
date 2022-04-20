<table>
    <thead>
    <tr>
        <th>菜色</th>
        <th>份量</th>
    </tr>
    </thead>
    <tbody>
    @foreach($DietLog as $d)
        <tr>
            <td>{{ $d->meal_name }}</td>
            <td>{{ $d->quantity }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
