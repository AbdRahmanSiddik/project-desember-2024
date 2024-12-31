<?php

namespace App\Http\Controllers;

use App\Models\Teller\Rekening;
use App\Models\Teller\Tabungan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function anggota()
    {
        $rekening = Rekening::where('anggota', auth()->user()->id);
        if ($rekening->count() > 0) {

            $saldoMasuk = Tabungan::where('rekening_id', $rekening->first()->id)
                ->where('jenis', 'masuk')
                ->sum('jumlah');

            $saldoKeluar = Tabungan::where('rekening_id', $rekening->first()->id)
                ->where('jenis', 'keluar')
                ->sum('jumlah');

            $saldo = $saldoMasuk - $saldoKeluar;
            $data = [
                'saldo' => $saldo,
                'haveRekening' => $rekening->count(),
            ];
        }else{
            $data = [
                'saldo' => 0,
                'haveRekening' => $rekening->count(),
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
