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
        <a href="/" class="button-href3" style="text-decoration: none">Home</a>
        <a href="/logout" class="button-href3" style="text-decoration: none">Logout</a>
    </div>


    <form style="float:right; margin:20px;"action="" method="GET">
        @csrf
        <select name="search" id="search">
            <option selected hidden disabled>Sort By Type</option>
            <option value="diterima">Diterima</option>
            <option value="ditolak">Ditolak</option>
        </select>
        <button style="margin-left:10px; margin-top:1px"type="submit" class="button-17">Search</button>
        <a href="/data-petugas" class="btn btn-primary" style="text-decoration: none;">Refresh</a>
    </form>


    <table class="table table-dark">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Age</th>
            <th>Telp</th>
            <th>Last Education</th>
            <th>Education Name</th>
            <th>CV file</th>
            <th>Status</th>
            <th>Schedule</th>
            <th>Action</th>
        </tr>

        @php
            $no = 1;
            $search = '';
            if (@$_GET['search']) {
                $search = $_GET['search'];
            }
        @endphp

        @foreach ($data as $dt)
            @if ($search !== '')
                @if ($dt->respon)
                    @if ($dt->respon['status'] == $search)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $dt['name'] }}</td>
                            <td>{{ $dt['email'] }}</td>
                            <td>{{ $dt['age'] }}</td>
                            <td>{{ $dt['no_telp'] }}</td>
                            <td>{{ $dt['last_education'] }}</td>
                            <td>{{ $dt['education_name'] }}</td>
                            <td><a href="../assets/folder/{{ $dt->file }}" target="_blank">lihat cv</a></td>
                            <td>
                                {{-- cek apakah data report ini sudah memiliki relasi dengan data dari with('respon') --}}
                                @if ($dt->respon)
                                    {{-- kalau ada hasil relasinya tampilkan bagian status  --}}
                                    {{ $dt->respon['status'] }}
                                @else
                                    {{-- kalau gaada tampilakn tanda ini  --}}
                                    -
                                @endif
                            </td>
                            <td>
                                @if ($dt->respon)
                                    {{-- cek apakah data report ini sudah memiliki relasi dengan data dari with('respon') --}}
                                    @if ($dt->respon->status == 'diterima')
                                        {{-- kalau ada hasil relasinya tampilkan bagian status  --}}
                                        {{ \Carbon\Carbon::parse($dt->respon['date'])->format('j F, Y') }}
                                    @else
                                        {{-- kalau gaada tampilakn tanda ini  --}}
                                        -
                                    @endif
                                @else
                                    -
                                @endif
                            </td>
                            <td style="display: flex; justify-content:center;">
                                {{-- kirim data id dari foreach report ke path dinamis punya nya route respons.edit --}}
                                <a href="{{ route('respon.edit', $dt->id) }}" class="back-btn">Send Respon</a>
                            </td>
                        </tr>
                    @endif
                @endif
            @else
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $dt['name'] }}</td>
                    <td>{{ $dt['email'] }}</td>
                    <td>{{ $dt['age'] }}</td>
                    <td>{{ $dt['no_telp'] }}</td>
                    <td>{{ $dt['last_education'] }}</td>
                    <td>{{ $dt['education_name'] }}</td>
                    <td><a href="../assets/folder/{{ $dt->file }}" target="_blank">lihat cv</a></td>
                    <td>
                        {{-- cek apakah data report ini sudah memiliki relasi dengan data dari with('respon') --}}
                        @if ($dt->respon)
                            {{-- kalau ada hasil relasinya tampilkan bagian status  --}}
                            {{ $dt->respon['status'] }}
                        @else
                            {{-- kalau gaada tampilakn tanda ini  --}}
                            -
                        @endif
                    </td>
                    <td>
                        @if ($dt->respon)
                            {{-- cek apakah data report ini sudah memiliki relasi dengan data dari with('respon') --}}
                            @if ($dt->respon->status == 'diterima')
                                {{-- kalau ada hasil relasinya tampilkan bagian status  --}}
                                {{ \Carbon\Carbon::parse($dt->respon['date'])->format('j F, Y') }}
                            @else
                                {{-- kalau gaada tampilakn tanda ini  --}}
                                -
                            @endif
                        @else
                            -
                        @endif
                    </td>
                    <td style="display: flex; justify-content:center;">
                        {{-- kirim data id dari foreach report ke path dinamis punya nya route respons.edit --}}
                        <a href="{{ route('respon.edit', $dt->id) }}" style="text-decoration: none;" class="back-btn">Send Respon</a>
                    </td>
                </tr>
            @endif
        @endforeach
    </table>
</body>

</html>
