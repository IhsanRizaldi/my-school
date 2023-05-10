<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusan';
    protected $fillable = ['nama_jurusan','deskripsi','logo'];
    // Model
    protected static function booted(): void
    {
        static::creating(function (Jurusan $model) {
            $model->uuid = Str::uuid()->toString();
        });
    }
}
