<?php

namespace App\Http\Controllers;

use App\Models\Buku_tabel;
use App\Models\Transaksi_tabel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
        $bukus =  Buku_tabel::get();
        return view('admin.master', compact('bukus'), ['title' => "Master Buku"]);
    }
    public function create()
    {
        return view('admin.tambahbuku', ['title' => "Tambah Buku"]);
    }
    public function  store(Request $request)
    {
        $buku = DB::table('buku_tabel')->get('id');
        // dd($buku);
        $id = 0;
        // Validasi request
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan kebutuhan Anda
        ]);

        // Dapatkan file yang diunggah
        $file = $request->file('gambar');

        // Generate nama file baru
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Simpan gambar di folder public/images
        $filePath = $request->file('gambar')->storeAs('images', $fileName, 'public');

        DB::table('buku_tabel')->insert([
            'nomor_buku' => "SNL." . now()->format('Ymd.') . count($buku) + 1,
            'judul' => $request->input('judul'),
            'penerbit' => $request->input('penerbit'),
            'penulis' => $request->input('penulis'),
            'kategori' => $request->input('kategori'),
            'sinopsis' => $request->input('sinopsis'),
            'gambar' => $fileName,
        ]);
        // Mengambil judul buku yang baru ditambahkan
        $newBookTitle = $request->input('judul');

        // Membuat catatan riwayat
        DB::table('history')->insert([
            'body' => Auth::user()->nama_lengkap . ' menambahkan buku ' . $newBookTitle . ' pada ' . now(),
        ]);
        return redirect('/master')->with(['success' => 'Data berhasil disimpan']);
    }

    public function detail($id)
    {
        $dataBuku = DB::table('buku_tabel')
            ->where('id', '=', $id)->get();
        // dd($dataBuku);
        return view('admin.viewmaster', ['datas' => $dataBuku], ['title' => 'view']);
    }
    public function edit($id)
    {
        $editbuku = DB::table('buku_tabel')->where('id', $id)->get();

        return view('admin.editbuku', ['editbuku' => $editbuku], ["title" => "Edit Buku"]);
    }
    public function update(Request $request, $id)
    {
        // // Validasi request
        // $request->validate([
        //     'judul' => 'required',
        //     'penulis' => 'required',
        //     'penerbit' => 'required',
        //     'kategori' => 'required',
        //     'sinopsis' => 'required',
        // ]);

        // Lakukan update dengan menggunakan method ->input() pada objek Request
        DB::table('buku_tabel')->where('id', $id)->update([
            'judul' => $request->input('judul'),
            'penulis' => $request->input('penulis'),
            'penerbit' => $request->input('penerbit'),
            'kategori' => $request->input('kategori'),
            'sinopsis' => $request->input('sinopsis'),
        ]);
        $judulBuku = DB::table('buku_tabel')->where('id', $id)->value('judul');
        DB::table('history')->insert([
            'body' => Auth::user()->nama_lengkap . 'mengedit buku ' . $judulBuku . 'pada' . now(),
        ]);
        return redirect('/view/' . $id)->with(['success' => 'Data berhasil diedit']);
    }

    public function delete($id)
    {
        // Mendapatkan data buku sebelum dihapus
        $buku = Buku_tabel::find($id);
        // Mendapatkan data transaksi sebelum dihapus
        $transaksi = Transaksi_tabel::where('buku_id', $id)->first();

        // Menyimpan informasi yang akan digunakan dalam catatan riwayat
        $judulBuku = $buku->judul;

        // Menghapus data buku
        Buku_tabel::where('id', $id)->delete();
        // Menghapus data transaksi terkait dengan buku
        Transaksi_tabel::where('buku_id', $id)->delete();

        // Membuat catatan riwayat
        $history = DB::table('history')->insert([
            'body' =>  Auth::user()->nama_lengkap . ' menghapus buku ' . $judulBuku . ' pada ' . now(),
        ]);

        return redirect('/master')->with(['delete' => 'Data berhasil dihapus']);
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        $bukus = Buku_tabel::where('judul', 'like', '%' . $query . '%')->get();

        // Periksa apakah hasil pencarian kosong
        if ($bukus->isEmpty()) {
            $pesan = "Maaf, buku dengan judul '$query' tidak ditemukan.";
            return view('admin.search', compact('pesan'));
        }

        return view('admin.search', compact('bukus'))->with('title', 'Master Buku');
    }

    public function trash()
    {
        $data =  Buku_tabel::onlyTrashed()->get();
        return view('admin.trash', compact('data'));
    }

    public function restore($id)
    {
        $book = Buku_tabel::withTrashed()->find($id);
        $book->restore();

        // Mendapatkan judul buku sebelum dihapus
        $bookTitle = $book->judul;

        // Jika buku berhasil dipulihkan, maka buat catatan riwayat
        if ($book->wasChanged()) {
            DB::table('history')->insert([
                'body' => Auth::user()->nama_lengkap . ' memulihkan buku ' . $bookTitle . ' pada ' . now()
            ]);
        };
        return redirect('/trash')->with(['trash' => 'Data berhasil dipulihkan']);
    }
}
