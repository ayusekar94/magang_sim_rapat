<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'pesertas';

    protected $fillable = [
        'nama_peserta',
        'divisi',
        'jabatan',
        'rapat_id'
    ];

    public function rapat()
    {
        return $this->belongsTo(Rapat::class, 'rapat_id');
    }
}
