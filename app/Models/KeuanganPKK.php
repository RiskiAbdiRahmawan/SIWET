<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeuanganPKK extends Model
{
    use HasFactory;
    protected $table = 'Kas_PKK';
    protected $primaryKey = 'ID_Transaksi';
    public $incrementing = true;

    protected $fillable = [
        'ID_Pengurus',
        'nominal',
        'jenis_Transaksi',
        'tanggal',
        'saldo',
        'deskripsi',
    ];
    public function RW(){
        return $this->belongsTo(PKK::class, 'ID_Pengurus', 'ID_Pengurus');
    }
}
