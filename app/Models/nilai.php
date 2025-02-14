<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class nilai extends Model
{
    use HasFactory;
    protected $fillable = [
        'matapelajaran_id',
        'siswa_id',
        'nilai'
    ];
    public function MataPelajaran(): BelongsTo
    {
        return $this->belongsTo(MataPelajaran::class, 'matapelajaran_id');
    }
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(siswa::class);
    }
}