<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KegiatanRW extends Model
{
    protected $table = 'Kegiatan_RW';
    protected $primaryKey = 'ID_Kegiatan_RW';

    protected $fillable = [
        'ID_RW',
        'nama_Kegiatan',
        'waktu',
        'tanggal',
        'tempat',
        'penanggung_Jawab',
        'deskripsi',
        'gambar',
    ];
    public function RW(): BelongsTo{
        return $this->belongsTo(RW::class, 'ID_RW', 'ID_RW');
    }
}
