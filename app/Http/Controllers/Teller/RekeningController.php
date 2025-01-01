<?php

namespace App\Http\Controllers\Teller;

use App\Http\Controllers\Controller;
use App\Models\Teller\Rekening;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\Teller\RekeningRequest;
use App\Models\Admin\Kategori;
use App\Models\Admin\Profile;
use App\Models\Teller\Pegadaian;
use App\Models\Teller\Pinjaman;
use App\Models\Teller\Tabungan;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

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
        return view('teller.rekening.create', $data);
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

        $file_name = $token.".".$file->getClientOriginalExtension();

        $no_rekening = Profile::where('id_profile', auth()->user()->profile_id)->first()->no_profile.mt_rand(0000, 9999);

        $data = [
            'token_rekening' => $token,
            'no_rekening' => $no_rekening,
            'nama_rekening' => $nama_rekening,
            'anggota' => $anggota,
            'kategori_id' => $kategori_id,
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
        return view('teller.rekening.show', compact('rekening'));
    }

    public function edit(Rekening $rekening)
    {
        $tabungan = Tabungan::where('rekening_id', $rekening->id_rekening);
        $tabungan_masuk = $tabungan->where('jenis', 'masuk')->count('jumlah');
        $tabungan_keluar = $tabungan->where('jenis', 'keluar')->count('jumlah');
        $saldo = $tabungan_masuk - $tabungan_keluar;
        if($saldo > 0){
            $close = true;
        } else {
            $close = false;
        }
        $kategoris = Kategori::select('token_kategori', 'nama_kategori', 'id_kategori')->get();
        return view('teller.rekening.edit', compact('rekening', 'kategoris', 'close'));
    }

    public function update(RekeningRequest $request, Rekening $rekening)
    {
        $token = Str::random(32);
        $nama_rekening = $request->nama_rekening;
        $kategori_id = $request->kategori_id;
        $ktp = $request->ktp;
        $deskripsi = $request->deskripsi;
        $anggota = User::where('token_user', $request->token_anggota)->first()->id;
        if($request->hasFile('foto_ktp')) {
            $file = $request->file('foto_ktp');
            $file_name = $token.".".$file->getClientOriginalExtension();
            $file->storeAs('private/ktp', $file_name, 'local');
            if(Storage::exists('private/ktp/'.$rekening->foto_ktp)) {
                Storage::delete('private/ktp/'.$rekening->foto_ktp);
            }
        }else{
            $file_name = $rekening->foto_ktp;
        }

        $data = [
            'token_rekening' => $token,
            'nama_rekening' => $nama_rekening,
            'anggota' => $anggota,
            'kategori_id' => $kategori_id,
            'ktp' => $ktp,
            'foto_ktp' => $file_name,
            'deskripsi' => $deskripsi,
        ];

        $rekening->update($data);

        return redirect()->route('rekening.index')->with('success', 'Rekening berhasil diubah');
    }

    public function destroy(Rekening $rekening)
    {
        $tabungan = Tabungan::where('rekening_id', $rekening->id_rekening);
        $tabungan_masuk = $tabungan->where('jenis', 'masuk')->count('jumlah');
        $tabungan_keluar = $tabungan->where('jenis', 'keluar')->count('jumlah');
        $saldo = $tabungan_masuk - $tabungan_keluar;
        $pinjaman = Pinjaman::where('rekening_id', $rekening->id_rekening)->count('jumlah');
        $pegadaian = Pegadaian::where('rekening_id', $rekening->id_rekening)->count('jumlah');
        $cek = $saldo + $pinjaman + $pegadaian;
        if ($cek > 0) {
            return redirect()->route('rekening.index')->with('error', 'Rekening tidak bisa dihapus karena masih memiliki saldo atau pinjaman');
        } else {
            $rekening->delete();
            if(Storage::exists('private/ktp/'.$rekening->foto_ktp)) {
                Storage::delete('private/ktp/'.$rekening->foto_ktp);
            }
            return redirect()->route('rekening.index')->with('success', 'Rekening berhasil dihapus');
        }
    }

    public function ktp($ktp)
    {
        return response()->file(storage_path('app/private/ktp/'.$ktp), [
            'Content-Disposition' => 'inline' // Untuk menampilkan langsung di browser
        ]);
    }
}
