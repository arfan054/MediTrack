@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-semibold text-center text-blue-600 mb-6">Formulir Pendaftaran MediTrack</h1>

        <form action="{{ route('home.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-gray-700 font-medium">Nama Lengkap</label>
                <input type="text" name="nama" class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" placeholder="Masukkan nama Anda" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium">NIK</label>
                <input type="text" name="nik" class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" placeholder="Masukkan NIK" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" required>
                    <option value="">-- Pilih --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div>
                <label class="block text-gray-700 font-medium">Alamat</label>
                <textarea name="alamat" class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
            </div>

            <div>
                <label class="block text-gray-700 font-medium">Nomor Telepon</label>
                <input type="text" name="no_hp" class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" placeholder="0812xxxxxxx" required>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                Daftar Sekarang
            </button>

            <div class="text-center mt-4">
                <a href="{{ route('home.index') }}" class="text-blue-500 hover:underline">← Kembali ke halaman utama</a>
            </div>
        </form>
    </div>
</div>
@endsection
