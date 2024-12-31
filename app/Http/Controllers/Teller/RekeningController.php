<?php

namespace App\Http\Controllers\Teller;

use App\Http\Controllers\Controller;
use App\Models\Teller\Rekening;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\Teller\RekeningRequest;

class RekeningController extends Controller
{
    public function index()
    {
        $rekenings = Rekening::with('anggota', 'teller')->get();

        return view('teller.rekening.index', compact('rekenings'));
    }

    public function create()
    {
        return view('admin.rekening.create');
    }

    public function store(RekeningRequest $request)
    {
        $token = Str::random(32);
        $nama_rekening = $request->nama_rekening;
        $kategori_id = $request->kategori_id;
        $ktp = $request->ktp;
        $deskripsi = $request->deskripsi;
        $file = $request->file('foto_ktp');

        
    }

    public function show(Rekening $rekening)
    {
        return view('admin.rekening.show', compact('rekening'));
    }

    public function edit(Rekening $rekening)
    {
        return view('admin.rekening.edit', compact('rekening'));
    }

    public function update(RekeningRequest $request, Rekening $rekening)
    {
        //
    }

    public function destroy(Rekening $rekening)
    {
        //
    }
}
