<!DOCTYPE html>
<html>
<head>
    <title>Daftar Antrian - MediTrack</title>
</head>
<body>
    <h1>Form Pendaftaran Antrian</h1>
    <form action="{{ route('home.store') }}" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Layanan:</label><br>
        <input type="text" name="layanan" required><br><br>

        <label>Tanggal:</label><br>
        <input type="date" name="tanggal" required><br><br>

        <label>Waktu:</label><br>
        <input type="time" name="waktu" required><br><br>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>
