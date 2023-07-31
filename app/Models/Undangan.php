<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    use HasFactory;

    protected $table = 'undangans';

    protected $fillable = [
        'email_penerima',
        'status_undangan',
        'waktu_pengiriman',
        'rapat_id',
    ];

    public function rapat()
    {
        return $this->belongsTo(Rapat::class, 'rapat_id');
    }
}
