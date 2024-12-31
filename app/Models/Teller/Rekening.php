<?php

namespace App\Models\Teller;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use HasFactory;
    protected $table = 'rekenings';
    protected $primaryKey = 'token_rekening';
    protected $keyType = 'string';
    protected $guarded = ['id_rekening', 'created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        return 'token_rekening';
    }

    public function anggota()
    {
        return $this->belongsTo(User::class, 'anggota', 'id');
    }

    public function teller()
    {
        return $this->belongsTo(User::class, 'teller', 'id');
    }
}
