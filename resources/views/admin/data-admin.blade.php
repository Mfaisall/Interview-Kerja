<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/admin.css">
</head>

<body>

    <h2 style="text-align: center">All Data</h2>
    <div class="button-href">
        <a href="{{ route('export.pdf') }}" class="button-href1" style="text-decoration: none">Export Pdf</a>
        <a href="{{ route('export.excel') }}" class="button-href2" style="text-decoration: none">Export Excel</a>
        <a href="/" class="button-href3" style="text-decoration: none">Home</a>
        <a href="/logout" class="button-href3" style="text-decoration: none">Logout</a>
    </div>


    <form style="margin-top:20px; margin:28px;">
        <input type="search" name="search" placeholder="Search By Name">
        <button type="submit">Search</button>
        <a href="/data-admin"
            style="text-decoration: none; color:black; border: 4px black; background-color: ;">Refresh</a>
    </form>

    <table class="table table-dark" style="text-align: center">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">Telp</th>
                <th scope="col">Last Educatio</th>
                <th scope="col">Education Name</th>
                <th scope="col">Cv File</th>
                <th scope="col">status</th>
                <th scope="col">Schedule</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        @php
            $no = 1;
        @endphp

        <tbody>
            @foreach ($interviews as $inter)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $inter['name'] }}</td>
                    <td>{{ $inter['email'] }}</td>
                    <td>{{ $inter['age'] }}</td>

                    @php
                        $telp = substr_replace($inter->no_telp, '62', 0, 1);
                    @endphp

                    @php
                        if ($inter->respon) {
                            if ($inter->respon->status == 'diterima') {
                                $pesanWA =
                                    'Hallo ' .$inter->name .'!Pengaduan Anda di ' .$inter->respon['status'] .
                                    '.Silahkan Data Pada Hari Yang Sudah Ditentukan: ' .  \Carbon\Carbon::parse($inter->respon['date'])->format('j F, Y') ;
                            } else {
                                $pesanWA = 'Hallo ' . $inter->name . '! Pengaduan Anda di ' . $inter->respon['status'];
                            }
                        } else {
                            $pesanWA = 'Belum ada response';
                        }
                        
                    @endphp

                    <td> <a
                            href="https:wa.me/{{ $telp }}?text={{ $pesanWA }}"target="_blank">{{ $telp }}</a>
                    </td>

                    <td>{{ $inter['last_education'] }}</td>
                    <td>{{ $inter['education_name'] }}</td>
                    <td><a href="../assets/folder/{{ $inter->file }}" target="_blank"
                            style="text-decoration: none">lihat cv</a></td>
                    <td>
                        {{-- cek apakah data report ini sudah memiliki relasi dengan data dari with('respon') --}}
                        @if ($inter->respon)
                            {{-- kalau ada hasil relasinya tampilkan bagian status  --}}
                            {{ $inter->respon['status'] }}
                        @else
                            {{-- kalau gaada tampilakn tanda ini  --}}
                            -
                        @endif
                    </td>
                    <td>
                        {{-- cek apakah data report ini sudah memiliki relasi dengan data dari with('respon') --}}
                        @if ($inter->respon)
                            @if ($inter->respon->status == 'diterima')
                                {{-- kalau ada hasil relasinya tampilkan bagian status  --}}
                                {{ \Carbon\Carbon::parse($inter->respon['date'])->format('j F, Y') }}
                            @else
                                {{-- kalau gaada tampilakn tanda ini  --}}
                                -
                            @endif
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('delete', $inter->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
