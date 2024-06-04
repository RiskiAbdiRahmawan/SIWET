<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\kriteria;
use Illuminate\Http\Request;

class SAWController extends Controller
{
    public function calculate(Request $request)
    {
        // Ambil data kriteria
        $kriteria = Kriteria::all();

        // Ambil data alternatif
        $alternatif = Alternatif::all();

        // Nilai matriks keputusan (statis)
        $jumlahKriteria = $kriteria->count();
        $jumlahAlternatif = $alternatif->count();

        // Nilai matriks keputusan (statis)
        $matriksKeputusan = [];
        for ($i = 0; $i < $jumlahAlternatif; $i++) {
            for ($j = 0; $j < $jumlahKriteria; $j++) {
                $matriksKeputusan[$i][$j] = rand(1, 10);
            }
        }

        // Normalisasi matriks keputusan
        $normalisasiMatriks = $this->normalisasi($matriksKeputusan);

        // Hitung skor akhir
        $skorAkhir = $this->hitungSkor($normalisasiMatriks, $kriteria);

        return view('PKK.SPK.Saw.perhitungan', compact('alternatif', 'kriteria', 'skorAkhir','matriksKeputusan','normalisasiMatriks'));
    }

    private function normalisasi($matriks)
    {
        $normalisasiMatriks = [];
        $jmlKriteria = count($matriks[0]);
        $jmlAlternatif = count($matriks);

        // Iterasi setiap kolom (kriteria)
        for ($i = 0; $i < $jmlKriteria; $i++) {
            $max = max(array_column($matriks, $i));
            $min = min(array_column($matriks, $i));

            // Iterasi setiap baris (alternatif)
            for ($j = 0; $j < $jmlAlternatif; $j++) {
                $normalisasiMatriks[$j][$i] = ($matriks[$j][$i] - $min) / ($max - $min);
            }
        }

        return $normalisasiMatriks;
    }

    private function hitungSkor($normalisasiMatriks, $kriteria)
    {
        $skorAkhir = [];
        $jmlAlternatif = count($normalisasiMatriks);
    
        // Iterasi setiap alternatif
        for ($i = 0; $i < $jmlAlternatif; $i++) {
            $skorAkhir[$i] = 0;
            foreach ($kriteria as $key => $kri) {
                $skorAkhir[$i] += $normalisasiMatriks[$i][$key] * $kri->bobot_Kriteria;
            }
        }
    
        // Mengurutkan skor akhir secara descending
        arsort($skorAkhir);
    
        return $skorAkhir;
    }
    

      
 }

