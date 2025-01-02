<?php

namespace App\Models\Teller;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    use HasFactory;
    protected $table = 'pinjamans';
    protected $primaryKey = 'token_pinjaman';
    protected $keyType = 'string';
    protected $guarded = ['id_pinjaman', 'created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        return 'token_pinjaman';
    }

    public function rekening()
    {
        return $this->belongsTo(Rekening::class, 'rekening_id', 'id_rekening');
    }

    public function teller()
    {
        return $this->belongsTo(User::class, '_teller', 'id');
    }
}
