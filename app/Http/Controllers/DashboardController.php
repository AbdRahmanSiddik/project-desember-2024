<?php

namespace App\Http\Controllers;

use App\Models\Teller\Rekening;
use App\Models\Teller\Tabungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function anggota()
    {
        $rekening = Rekening::where('anggota', auth()->user()->id)
            ->with(['anggotas.profile', 'tellers.profile', 'kategori'])
            ->first();

        $histories = DB::table('tabungans')->where('rekening_id', $rekening->id_rekening)
            ->select(DB::raw("'Tabungan Masuk' AS kegiatan"), 'created_at AS tanggal', 'jumlah')
            ->where('jenis', 'masuk')
            ->unionAll(DB::table('tabungans')->where('rekening_id', $rekening->id_rekening)->select(DB::raw("'Tabungan Keluar' AS kegiatan"), 'created_at AS tanggal', 'jumlah')->where('jenis', 'keluar'))
            ->unionAll(DB::table('pinjamans')->where('rekening_id', $rekening->id_rekening)->select(DB::raw("'Pinjaman' AS kegiatan"), 'created_at AS tanggal', 'jumlah'))
            ->unionAll(DB::table('pegadaians')->where('rekening_id', $rekening->id_rekening)->select(DB::raw("'Pegadaian' AS kegiatan"), 'created_at AS tanggal', 'jumlah'))
            ->orderBy('tanggal', 'desc')
            ->get();

            // dd($histories);

        if ($rekening) {
            // Debugging: Periksa apakah rekening ditemukan
            // dd($rekening);

            $saldoMasuk = Tabungan::where('rekening_id', $rekening->id_rekening)
                ->where('jenis', 'masuk')
                ->sum('jumlah');

            $saldoKeluar = Tabungan::where('rekening_id', $rekening->id_rekening)
                ->where('jenis', 'keluar')
                ->sum('jumlah');

            $saldo = $saldoMasuk - $saldoKeluar;

            // Debugging: Periksa hasil query
            // dd([$saldoMasuk, $saldoKeluar, $saldo]);

            $data = [
                'saldo' => $saldo,
                'haveRekening' => 1,
                'rekening' => $rekening,
                'histories' => $histories,
            ];
        } else {
            $data = [
                'saldo' => 0,
                'haveRekening' => 0,
                'rekening' => $rekening,
                'histories' => $histories,
            ];
        }

        return view('anggota.dashboard', $data);
    }

    public function admin()
    {
        return view('admin.dashboard');
    }

    public function teller()
    {
        return view('teller.dashboard');
    }
}
