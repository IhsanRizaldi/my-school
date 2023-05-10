<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tags extends Model
{
    use HasFactory;
    protected $table = 'tags';
    protected $fillable = ['judul','deskripsi','gambar'];

    // Model
    protected static function booted(): void
    {
        static::creating(function (Tags $model) {
            $model->uuid = Str::uuid()->toString();
        });
    }

    public function artikel()
    {
        return $this->hasMany(Artikel::class);
    }
}
