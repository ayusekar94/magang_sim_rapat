<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_materi',
        'deskripsi_materi',
        'file_materi',
        'rapat_id'
    ];

    protected $table = 'materis';

    public function rapat()
    {
        return $this->belongsTo(Rapat::class, 'rapat_id');
    }
}
