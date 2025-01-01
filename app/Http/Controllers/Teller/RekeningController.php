<?php

namespace App\Http\Controllers\Teller;

use App\Http\Controllers\Controller;
use App\Models\Teller\Rekening;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\Teller\RekeningRequest;
use App\Models\Admin\Kategori;
use App\Models\Admin\Profile;
use App\Models\User;

class RekeningController extends Controller
{
    public function index()
    {
        $rekenings = Rekening::with(['anggotas.profile', 'tellers.profile'])->get();

        return view('teller.rekening.index', compact('rekenings'));
    }

    public function create()
    {
        $data = [
            'kategoris' => Kategori::select('token_kategori', 'nama_kategori', 'id_kategori')->get()
        ];
        return view('admin.rekening.create', $data);
    }

    public function store(RekeningRequest $request)
    {
        $token = Str::random(32);
        $nama_rekening = $request->nama_rekening;
        $kategori_id = $request->kategori_id;
        $ktp = $request->ktp;
        $deskripsi = $request->deskripsi;
        $anggota = User::where('token_user', $request->token_anggota)->first()->id;
        $file = $request->file('foto_ktp');

        $file_name = $token.".".$file->getClientOriginalName();

        $no_rekening = Profile::where('id_profile', auth()->user()->profile_id)->first()->no_profile.mt_rand(000000, 999999);

        $data = [
            'token_rekening' => $token,
            'no_rekening' => $no_rekening,
            'nama_rekening' => $nama_rekening,
            'anggota' => $anggota,
            'kategori_id' => $kategori_id->id,
            'ktp' => $ktp,
            'foto_ktp' => $file_name,
            'deskripsi' => $deskripsi,
            'teller' => auth()->user()->id
        ];

        Rekening::create($data);
        $file->storeAs('private/ktp', $file_name, 'local');

        return redirect()->route('rekening.index')->with('success', 'Rekening berhasil dibuat');
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
