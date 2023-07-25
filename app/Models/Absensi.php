<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensis';

    protected $fillable = [
        'rapat_id',
        'peserta_id',
        'kehadiran',
        'keterangan',
    ];

    public function rapat()
    {
        return $this->belongsTo(Rapat::class, 'rapat_id');
    }

    public function pesertaRapat()
    {
        return $this->belongsTo(PesertaRapat::class, 'peserta_id');
    }
}
