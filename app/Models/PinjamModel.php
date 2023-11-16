<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinjamModel extends Model
{
    use HasFactory;
    protected $table        = "peminjaman";
    protected $primaryKey   = "idpinjam";
    protected $fillable     = ['idpinjam','namapetugas','namasiswa','judulbuku'];

    //relasi ke petugas
    public function petugas()
    {
        return $this->belongsTo('App\Models\PetugasModel', 'idpetugas');
    }

    //relasi ke siswa
    public function siswa()
    {
        return $this->belongsTo('App\Models\SiswaModel', 'namasiswa');
    }

    //relasi ke buku
    public function buku()
    {
        return $this->belongsTo('App\Models\BukuModel', 'judulbuku');
    }
}