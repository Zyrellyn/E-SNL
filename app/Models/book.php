<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = [
        'kode_buku', 'judul', 'penulis', 'penerbit', 'kategori', 'sinopsis', 'gambar'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($book) {
            $book->code = 'B' . str_pad($book->id, 5, '0', STR_PAD_LEFT);
        });
    }
}
