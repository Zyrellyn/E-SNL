<?php

namespace App\Http\Controllers;

use App\Models\Buku_tabel;
use Illuminate\Http\Request;
use App\Models\Transaksi_tabel;
use Illuminate\Support\Facades\DB;

class VerifController extends Controller
{
    public function index()
    {
        $verif = Transaksi_tabel::with('buku_tabel', 'user')->get();
        $data = $verif;
        // dd($data);
        return view('admin.kembali', ['datas' => $data]);
    }
    public function return($id)
    {
        $transaksi = Transaksi_tabel::where('id', $id)->with('buku_tabel')->first(); // Ambil data transaksi lengkap
        // Periksa apakah transaksi ditemukan
        if (!$transaksi) {
            // Jika tidak, kembalikan respons dengan pesan kesalahan atau lakukan penanganan sesuai kebutuhan
            return redirect('/verifikasi')->with('error', 'Transaksi tidak ditemukan.');
        }
    
        // Perbarui status transaksi menjadi 'Dikembalikan'
        $transaksi->status = 'Dikembalikan';
        $transaksi->save();
    
        // Perbarui status buku menjadi 'Tersedia'
        $buku = $transaksi->buku_tabel;
        if ($buku) {
            $buku->status = 'Tersedia';
            $buku->save();
        }
        return redirect('/verifikasi');
    }
}
