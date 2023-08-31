<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password',
        'divisi_id',
    ];

    // Relasi One to One
    public function divisi()
    {
        return $this->hasOne(Divisi::class, 'divisi_id');
    }
}
