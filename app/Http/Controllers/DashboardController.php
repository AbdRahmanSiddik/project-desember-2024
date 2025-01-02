<?php

namespace App\Http\Controllers;

use App\Models\Teller\Rekening;
use App\Models\Teller\Tabungan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function anggota()
    {
        $rekening = Rekening::where('anggota', auth()->user()->id)
                            ->with(['anggotas.profile', 'tellers.profile', 'kategori'])
                            ->first();

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
            ];
        } else {
            $data = [
                'saldo' => 0,
                'haveRekening' => 0,
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
