<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Transaksi_tabel;

use function Laravel\Prompts\table;

class TransaksiController extends Controller
{
    public function show($id)
    {
        $dataBuku = DB::table('buku_tabel')
            ->where('id', '=', $id)->get();
        $users = Auth::user();
        // dd($users);
        return view('user.transaksi', ['datas' => $dataBuku], ['users' => $users], ['title' => "haloo"]);
    }
    public function store(Request $request)
    {
        // Ambil data buku berdasarkan ID
        $buku = DB::table('buku_tabel')->where('id', $request->input('buku_id'))->first();

        // Simpan data transaksi baru
        $transaksi = Transaksi_tabel::create([
            'user_id' => Auth::user()->id,
            'buku_id' => $request->buku_id,
            'tanggal_pinjam' => Carbon::now(),
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => 'Terpinjam'
        ]);

        // Simpan riwayat peminjaman
        DB::table('history')->insert([
            'body' => 'User ' . Auth::user()->nama_lengkap . ' melakukan peminjaman buku ' . $buku->judul . ' pada ' . $transaksi->tanggal_pinjam,
        ]);

        // Update status buku menjadi tidak tersedia
        DB::table('buku_tabel')->where('id', $request->buku_id)->update([
            'status' => 'Tidak Tersedia',
        ]);

        // Alihkan pengguna ke halaman pinjam
        return redirect('/pinjam');
    }

    public function kembalikan($id)
    {
    // Temukan transaksi berdasarkan ID menggunakan Eloquent
    $transaksi = Transaksi_tabel::where('id', $id)->first();
    // Update status transaksi menjadi 'Verif'
    $transaksi->update([
        'status' => 'Verifikasi',
    ]);
    // Simpan riwayat pengembalian buku
    DB::table('history')->insert([
        'body' => 'User ' . Auth::user()->nama_lengkap . ' mengembalikan buku ' . $transaksi->buku_tabel->judul . ' pada ' . now(),
    ]);

    // Alihkan pengguna ke halaman kembali
    return redirect('/kembali');
    }


    // Ganti sesuai namespace dan nama model Anda

    public function viewkembali()
    {
        $transaksis = Transaksi_tabel::where('user_id', Auth::user()->id)->where('status', '!=', 'Dikembalikan')->with('buku_tabel')->get();
        $data = $transaksis;
        return view('user.kembali', ['datas' => $data], ['title' => "haloo"]);
    }
    public function return()
    {
        // Mendapatkan ID pengguna yang sedang login
        $userId = Auth::id();

        // Mengambil data transaksi buku yang dipinjam oleh pengguna yang sedang login
        $transaksis = Transaksi_tabel::where('user_id', $userId)->with('buku_tabel')->get();

        // Mengembalikan data transaksi buku yang dipinjam oleh pengguna yang sedang login
        return view('user.library', ['datas' => $transaksis]);
    }
}
