<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Artikel extends Model
{
    use HasFactory;
    protected $table = 'artikel';
    protected $fillable = ['user_id','tags_id','judul','deskripsi','gambar'];

     // Model
     protected static function booted(): void
     {
         static::creating(function (Artikel $model) {
             $model->uuid = Str::uuid()->toString();
         });
     }

     public function tags()
     {
         return $this->belongsTo(Tags::class);
     }

     public function user()
     {
         return $this->belongsTo(User::class);
     }
}
