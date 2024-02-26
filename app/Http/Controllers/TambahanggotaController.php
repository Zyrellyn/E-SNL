<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class TambahanggotaController extends Controller
{
    public function index()
    {
        //memngambil dari tabel user
        $anggota = DB::table('users')->where('level', 'user')->get();
        //mengirim data ke viem index
        //anggota yang berwarna hijau meerupakan bahan untuk mengambil 
        // dd($anggota);
        return view('admin.anggota', ['anggota' => $anggota], ["title" => "Daftar anggota"]);
    }

    public function store(Request $request)
    {
        //insert data ke tabel 
        DB::table('users')->insert([
            'email' => $request->email,
            'nama_lengkap' => $request->nama_lengkap,
            'password' =>  bcrypt($request->newPassword),
            'jenis_kelamin' => $request->jenis_kelamin,
            'telepon' => $request->telepon,
            'level' => $request->level
        ]);
        //alihkan halaman
        return redirect('/anggota')->with(['success' => 'Data berhasil ditambahkan']);
    }

    public function tambahan()
    {
        return view('admin.tambahanggota', ["title" => "Anggota"]);
    }

    public function edit($id)
    {
        $editanggota = DB::table('users')->where('id', $id)->get();
        return view('admin.editanggota', ['edit' => $editanggota], ["title" => "Edit Anggota"]);
    }

    public function update(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([
            'email' => $request->email,
            'nama_lengkap' => $request->nama_lengkap,
            'password' => $request->password,
            'jenis_kelamin' => $request->jenis_kelamin,
            'telepon' => $request->telepon
        ]);
        return redirect('/anggota')->with(['update' => 'Data berhasil diedit']);
    }

};
