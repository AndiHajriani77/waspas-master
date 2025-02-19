<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = "kriteria";
    protected $primaryKey = 'id';

    protected $fillable = ['kode_kriteria', 'nama_kriteria', 'bobot_kriteria', 'jenis_kriteria', 'karakter_kriteria'];


    public function decision_matrix()
    {
        return $this->hasMany(DecisionMatrix::class, 'id_kriteria', 'id');
    }
}
