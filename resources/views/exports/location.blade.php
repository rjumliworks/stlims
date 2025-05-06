<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
    <table>
        <thead style="background-color:#c8c8c8; padding: 5px; font-size: 9px;">
            <tr>
                <td style="width: 300px; text-align: center; font-weight: bold;">Municipality</td>
                <td style="width: 400px; text-align: center; font-weight: bold;">Barangay</td>
                <td style="width: 150px; text-align: center; font-weight: bold;">Total Request</td>
            </tr>
        </thead>
        <tbody>
        @foreach($lists as $list)
            <tr>
                <td style="text-align: center;">{{$list['municipality']}}</td>
                <td style="text-align: center;">{{$list['barangay']}}</td>
                <td style="text-align: center;">{{$list['count']}}</td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            @php
                $total = 0;
                foreach ($lists as $list) {
                    $total += floatval($list['count']);
                }
            @endphp
            <tr style="font-weight: bold; text-align: center;">
                <td colspan="2"></td>
                <td style="text-align: center; font-weight: bold;"><span style="font-family: DejaVu Sans;"></span>{{ $total }}</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
