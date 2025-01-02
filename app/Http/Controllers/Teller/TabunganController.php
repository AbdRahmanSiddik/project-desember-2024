<?php

namespace App\Http\Controllers\Teller;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teller\TabunganRequest;
use App\Models\Teller\Rekening;
use App\Models\Teller\Tabungan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TabunganController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'teller') {
            $tabungans = Tabungan::where('_teller', auth()->user()->id)
                                   ->with(['rekening', 'teller'])
                                   ->orderBy('created_at', 'desc')
                                   ->get();
        } else {
            $tabungans = Tabungan::with(['rekening', 'teller'])->orderBy('created_at', 'desc')->get();
        }

        return view('teller.tabungan.index', compact('tabungans'));
    }

    public function store(TabunganRequest $request)
    {
        $token = Str::random(32);
        $jenis = $request->jenis;
        $jumlah = $request->jumlah;
        $deskripsi = $request->deskripsi;
        $rekening_id = Rekening::where('no_rekening', $request->rekening_id)->first()->id_rekening;

        $data = [
            'token_tabungan' => $token,
            'rekening_id' => $rekening_id,
            'jumlah' => $jumlah,
            'jenis' => $jenis,
            'deskripsi' => $deskripsi,
            '_teller' => auth()->user()->id,
        ];

        Tabungan::create($data);

        return redirect()->route('tabungan.show', $token)->with('success', 'Tabungan berhasil ditambahkan.');
    }

    public function show(Tabungan $tabungan)
    {
        return view('teller.tabungan.show', compact('tabungan'));
    }

    public function edit(Tabungan $tabungan)
    {
        //
    }

    public function update(TabunganRequest $request, Tabungan $tabungan)
    {
        //
    }

    public function destroy(Tabungan $tabungan)
    {
        //
    }
}
