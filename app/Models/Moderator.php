<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moderator extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_moderator',
        'rapat_id'
    ];

    protected $table = 'moderators';

    public function rapat()
    {
        return $this->belongsTo(Rapat::class, 'rapat_id');
    }
}
