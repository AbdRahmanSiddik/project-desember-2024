<?php

namespace App\Models\Teller;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    use HasFactory;
    protected $table = 'tabungans';
    protected $primaryKey = 'token_tabungan';
    protected $keyType = 'string';
    protected $guarded = ['id_tabungan', 'created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        return 'token_tabungan';
    }
}
