<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapat extends Model
{
    use HasFactory;

    protected $table = 'rapats';

    protected $fillable = [
        'nama_rapat',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
        'deskripsi',
        'ruangan',
        'status',
    ];

    public function peserta()
    {
        return $this->hasMany(PesertaRapat::class, 'rapat_id');
    }

    public function materi()
    {
        return $this->hasMany(MateriRapat::class, 'rapat_id');
    }

    public function moderator()
    {
        return $this->hasOne(Moderator::class, 'rapat_id');
    }

    public function notulensi()
    {
        return $this->hasOne(NotulensiRapat::class, 'rapat_id');
    }
}
