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
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:20',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
        ]);

        Antrian::create($validated);

        return redirect()->route('home.index')->with('success', 'Pendaftaran berhasil!');
    }
}
