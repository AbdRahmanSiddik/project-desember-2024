<?php

namespace App\Models\Teller;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranPinjaman extends Model
{
    use HasFactory;
    protected $table = 'pembayaran_pinjamans';
    protected $primaryKey = 'token_pp';
    protected $keyType = 'string';
    protected $guarded = ['id_pembayaran_pinjaman', 'created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        return 'token_pp';
    }
}
