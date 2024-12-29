<?php

namespace App\Models\Teller;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranPegadaian extends Model
{
    use HasFactory;
    protected $table = 'pembayaran_pegadaians';
    protected $primaryKey = 'token_pg';
    protected $keyType = 'string';
    protected $guarded = ['id_pembayaran_pinjaman', 'created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        return 'token_pg';
    }
}
