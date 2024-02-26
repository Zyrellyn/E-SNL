<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
    public function index()
    {
        $JumlahBuku = count(DB::table('buku_tabel')->get());

        $BukuPinjam = count(DB::table('transaksi_tabel')->where('status', 'Terpinjam')->get());

        $BukuKembali = count(DB::table('transaksi_tabel')->where('status', 'Dikembalikan')->get());
        
        $JumlahAnggota = count(DB::table('users')->get());
        
        return view('admin.dashboard', ['title' => "Dashboard", 'JumlahBuku' => $JumlahBuku, 'BukuPinjam' => $BukuPinjam, 'BukuKembali' => $BukuKembali, 'JumlahAnggota'=>$JumlahAnggota]);
    }
}
