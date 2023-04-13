<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/data.css') }}">
</head>

<body>
    <form action="{{ route('respon.update', $interviewId) }}" method="POST"
        style="width: 500px; margin:5px auto; display:block;">
        @csrf
        @method('PATCH')
        <div class="input-card">
            <label for="">status</label>
            <select name="status" id="status">
                @if ($interview)
                    <option selected hidden disabled>Choose</option>
                    <option value="ditolak" {{ $interview['status'] == 'ditolak' ? 'selected' : '' }}>Di Tolak</option>
                    <option value="diterima" {{ $interview['status'] == 'diterima' ? 'selected' : '' }}>Di Terima
                    </option>
                @else
                    <option selected hidden disabled>Choose</option>
                    <option value="ditolak">Di Tolak</option>
                    <option value="diterima">Di Terima</option>
                @endif
            </select>
        </div>
        <div class="input-card">
            <label for="">date</label>
            @if ($interview)
                <input type="date" name="date" id="date" value="{{ $interview ? $interview['date'] : '' }}">
            @else
                <input type="date" name="date" id="date">
            @endif
        </div>
        <div>
            <button type="submit">Send Respons</button>
        </div>
    </form>
</body>

</html>
