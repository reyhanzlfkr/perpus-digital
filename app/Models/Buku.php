<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = [
        'foto',
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'sinopsis',
    ];

    public function kategoribukurelasi()
    {
        return $this->hasMany(Kategoribukurelasi::class, 'buku_id');
    }

    public function kategori()
    {
        return $this->belongsToMany
        (Kategori::class, 'kategoribukurelasi', 'buku_id', 'kategori_id');
    }


}
