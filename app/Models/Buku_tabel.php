<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buku_tabel extends Model
{
    public function buku_tabel()
    {
        return $this->belongsTo(Buku_tabel::class, 'buku_id');
    }
    use HasFactory, SoftDeletes;
    protected $table = 'buku_tabel'; // Eloquent akan membuat model
    protected $dates = ['deleted_at'];
    
}
