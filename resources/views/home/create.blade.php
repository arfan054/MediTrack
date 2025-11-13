<!DOCTYPE html>
<html>
<head>
    <title>Antrian Hari Ini - MediTrack</title>
</head>
<body>
    <h1>Daftar Antrian</h1>
    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif
    <a href="{{ route('home.create') }}">+ Daftar Antrian Baru</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Layanan</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Nomor Antrian</th>
        </tr>
        @foreach($queues as $q)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $q->nama }}</td>
            <td>{{ $q->layanan }}</td>
            <td>{{ $q->tanggal }}</td>
            <td>{{ $q->waktu }}</td>
            <td>{{ $q->nomor_antrian }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
