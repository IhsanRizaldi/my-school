<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'profil';
    protected $fillable = ['nama_sekolah','visi','misi','alamat','no_telp','email','logo','sambutan','gambar_kepsek','deskripsi'];
    // Model
    protected static function booted(): void
    {
        static::creating(function (Profil $model) {
            $model->uuid = Str::uuid()->toString();
        });
    }
}
