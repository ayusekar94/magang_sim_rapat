<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_divisi'
    ];

    // Relasi One to One
    public function akun()
    {
        return $this->belongsTo(Akun::class);
    }
}
