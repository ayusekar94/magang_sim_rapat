<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'NIP',
        'nama',
        'password',
        'divisi',
        'jabatan',
        'email',
        'departemen'
    ];

    protected $primaryKey = 'NIP';

    # Karyawan has many kegiatans
    public function rapat()
    {
        return $this->hasMany(Rapat::class, 'moderator_nip');
    }
}
