<?php

namespace App\Models;

use App\Models\DecisionMatrix;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    protected $table = "table_alternatif";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'kode_alternatif',
        'no_sk',
        'nama_alternatif',
        'luas_tanah',
    ];

    public function decision_matrix()
    {
        return $this->hasMany(DecisionMatrix::class, 'id_alternatif', 'id');
    }
    public function hasAnggota()
    {
        return $this->hasMany(Anggota::class, 'kode_alternatif');
    }
    public function hasVKriteria()
    {
        return $this->hasMany(ValueKriteria::class, 'kode_alternatif');
    }

    public function isUsed()
    {
        // Pemeriksaan apakah id_alternatif telah digunakan di tabel decision_matrix
        return DecisionMatrix::where('id_alternatif', $this->id)->exists();
    }
}
