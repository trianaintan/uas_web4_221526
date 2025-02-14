<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        'name',
        'kelas_id'
    ];
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(kelas::class);
    }
}