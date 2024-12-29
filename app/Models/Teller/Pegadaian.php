<?php

namespace App\Models\Teller;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegadaian extends Model
{
    use HasFactory;
    protected $table = 'pegadaians';
    protected $primaryKey = 'token_pegadaian';
    protected $keyType = 'string';
    protected $guarded = ['id_pegadaian', 'created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        return 'token_pegadaian';
    }
}
