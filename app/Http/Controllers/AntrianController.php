<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian;

class AntrianController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('daftar');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:20',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
        ]);

        // Default layanan hanya gigi
        $validated['layanan'] = 'gigi';

        // Tanggal hari ini
        $today = date('Y-m-d');

        // Cek no antrian terakhir pada tanggal yang sama
        $lastQueue = Antrian::where('tanggal_kunjungan', $today)
                            ->orderBy('id', 'desc')
                            ->first();

        // Kode layanan (G = Gigi)
        $kode = "G";

        if ($lastQueue) {
            // Ambil nomor dari data terakhir, contoh G015 → 15
            $number = intval(substr($lastQueue->no_antrian, 1)) + 1;
            $queueNumber = $kode . str_pad($number, 3, '0', STR_PAD_LEFT);
        } else {
            // Jika belum ada antrian hari ini → mulai dari G001
            $queueNumber = $kode . "001";
        }

        // Tambahkan nomor antrian & tanggal kunjungan
        $validated['no_antrian'] = $queueNumber;
        $validated['tanggal_kunjungan'] = $today;

        // Simpan ke database
        $antrian = Antrian::create($validated);

        // Redirect + kirim nomor antrian ke tampilan
        return redirect()->route('home.index')
            ->with('success', 'Pendaftaran berhasil!')
            ->with('nomor_antrian', $queueNumber);
    }
}
