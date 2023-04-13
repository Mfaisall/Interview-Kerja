<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data Interview</title>
</head>

<body>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Age</th>
            <th>Tanggal</th>
            <th>Last Education</th>
            <th>Education Name</th>
            <th>Status</th>
            <th>Schedule</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['email'] }}</td>
                <td>{{ $item['age'] }}</td>
                <td>{{ \Carbon\Carbon::parse($item['created_at'])->format('j F, Y') }}</td>
                <td>{{ $item['last_education'] }}</td>
                <td>{{ $item['education_name'] }}</td>
                <td>
                    {{-- cek apakah data report ini sudah memiliki relasi dengan data dari with('respon') --}}
                    @if ($item['respon'])
                        {{-- kalau ada hasil relasinya tampilkan bagian status  --}}
                        {{ $item['respon']['status'] }}
                    @else
                        {{-- kalau gaada tampilakn tanda ini  --}}
                        -
                    @endif
                </td>
                <td>
                    {{-- cek apakah data report ini sudah memiliki relasi dengan data dari with('respon') --}}
                    @if ($item['respon']['status'] == 'diterima')
                        {{-- kalau ada hasil relasinya tampilkan bagian status  --}}
                        {{ \Carbon\Carbon::parse($item->respon['date'])->format('j F, Y') }}
                    @else
                        -
                    @endif
                </td>
                <td><a src="assets/image/{{ $item['file'] }}" width="80"></a></td>
            </tr>
        @endforeach
    </table>
</body>

</html>
