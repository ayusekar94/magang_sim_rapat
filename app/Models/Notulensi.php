<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notulensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'isi_notulensi',
        'tindak_lanjut',
        'catatan_pentingp',
        'rapat_id'
    ];

    protected $table = 'notulensis';

    public function rapat()
    {
        return $this->belongsTo(Rapat::class, 'rapat_id');
    }
}
