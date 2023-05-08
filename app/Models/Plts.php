<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plts extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'plts';
    protected $fillabel = [
        'nama',
        'system_plts',
        'daya_plts',
        'daya_pln',
        'golongan_tarif_kode',
        'tagihan_pln_bulan',
    ];

    public function golongan_tarif()
    {
        return $this->belongsTo(Material::class, 'golongan_tarif_id');
    }
}
