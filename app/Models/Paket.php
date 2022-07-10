<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $table = "paket_hostings";

    public function details()
    {
        return $this->hasMany(PaketDetail::class, 'paket_hosting_id')->orderBy('id');
    }
    public function harga_ribuan($harga)
    {
        $rupiah = $harga%1000;
        $harga = ($harga-$rupiah)/1000;
        $data = [
            'ribuan' => $harga
            , 'rupiah' => $rupiah
        ];
        return $data;
    }
}
