<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    // Index → menampilkan semua data ruangan
    public function index()
    {
        $ruangans = Ruangan::all();
        return response()->json($ruangans);
    }

    // Create → form tambah data (sementara kosong, karena backend saja)
    public function create()
    {
        // Bisa diabaikan atau return json dummy
        return response()->json(['message' => 'Form create ruangan']);
    }

    // Store → simpan data baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_ruangan' => 'required|string|max:255',
            'kapasitas'   => 'required|integer',
            'deskripsi'   => 'nullable|string',
        ]);

        $ruangan = Ruangan::create($validated);

        return response()->json([
            'message' => 'Ruangan berhasil ditambahkan',
            'data'    => $ruangan
        ]);
    }
}
