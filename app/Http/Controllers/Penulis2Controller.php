<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis2;

class Penulis2Controller extends Controller
{
    // Menampilkan daftar penulis
    public function index()
    {
        $penulis = Penulis2::all();
        return view('penulis2.index', compact('penulis'));
    }

    // Menampilkan form untuk membuat penulis baru
    public function create()
    {
        return view('penulis2.create');
    }

    // Menyimpan data penulis baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_penulis' => 'required',
            'hasil_karya' => 'required',
            'penerbit' => 'required',
        ]);

        Penulis2::create($request->all());

        return redirect()->route('penulis.index')->with('success', 'Penulis berhasil ditambahkan');
    }

    // Menampilkan detail data penulis
    public function show(Penulis2 $penulis)
    {
        return view('penulis.show', compact('penulis'));
    }

    // Menampilkan form edit data penulis
    public function edit(Penulis2 $penulis)
    {
        return view('penulis2.edit', compact('penulis'));
    }

    // Memperbarui data penulis
    public function update(Request $request, Penulis2 $penulis)
    {
        $request->validate([
           'nama_penulis' => 'required',
            'hasil_karya' => 'required',
            'penerbit' => 'required',
        ]);

        $penulis->update($request->all());

        return redirect()->route('penulis2.index')->with('success', 'Penulis berhasil diperbarui');
    }

    // Menghapus data penulis
    public function destroy(Penulis2 $penulis)
    {
        $penulis->delete();

        return redirect()->route('penulis2.index')->with('success', 'Penulis berhasil dihapus');
    }
}

