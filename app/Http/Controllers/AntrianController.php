<?php

namespace App\Http\Controllers;

use App\Models\antrian;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function index()
    {
        $queues = antrian::orderBy('tanggal', 'desc')->get();
        return view('home.index', compact('queues'));
    }

    public function create()
    {
        return view('home.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'layanan' => 'required',
            'tanggal' => 'required|date',
            'waktu' => 'required',
        ]);

        $count = antrian::where('tanggal', $request->tanggal)->count();
        $nomor = $count + 1;

        antrian::create([
            'nama' => $request->nama,
            'layanan' => $request->layanan,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'nomor_antrian' => $nomor,
        ]);

        return redirect()->route('home.index')->with('success', 'Pendaftaran antrian berhasil!');
    }
}
