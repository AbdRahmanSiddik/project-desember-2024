<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Kategori;
use Illuminate\Http\Request;
use App\Http\Requests\KategoriRequest;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return view('admin.kategori.index', compact('kategoris'));
    }

    public function store(KategoriRequest $request)
    {
        $token = Str::random(32);

        Kategori::create([
            'token_kategori' => $token,
            'nama_kategori' => $request->nama_kategori,
            'biaya' => $request->biaya,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('admin.kategori.index')
                         ->with('success', 'Kategori created successfully.');
    }

    public function show(Kategori $kategori)
    {
        return view('admin.kategori.show', compact('kategori'));
    }

    public function update(KategoriRequest $request, Kategori $kategori)
    {
        $token = Str::random(32);

        $kategori->update([
            'token_kategori' => $token,
            'nama_kategori' => $request->nama_kategori,
            'biaya' => $request->biaya,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('admin.kategori.index')
                         ->with('success', 'Kategori updated successfully.');
    }

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();

        return redirect()->route('admin.kategori.index')
                         ->with('success', 'Kategori deleted successfully.');
    }
}
