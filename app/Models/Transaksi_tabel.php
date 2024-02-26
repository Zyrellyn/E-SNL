<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi_tabel extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];
    protected $table = 'transaksi_tabel';
    protected $dates = ['deleted_at']; 
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function buku_tabel(){
        return $this->belongsTo(Buku_tabel::class, 'buku_id');
    }  
}
