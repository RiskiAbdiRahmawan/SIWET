<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    use HasFactory;
    protected $table ="kriteria";
    protected $primaryKey = "ID_Kriteria";
    protected $fillable = ['nama_Kriteria','kode_Kriteria','bobot_Kriteria'];
    public function alternatif(){
        return $this -> hasMany(Alternatif::class);
    }
}
