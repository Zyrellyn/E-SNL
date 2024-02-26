<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index', ["title" => "Dashboard"]);
    }
    public function view()
    {
        $book = DB::table('buku_tabel')->get();
        return view('user.pinjam', compact('book'), ['title' => "Pinjam Buku"]);
    }
    public function detail($id)
    {
        $dataBuku = DB::table('buku_tabel')
            ->where('id', '=', $id)->get();
        // dd($dataBuku);
        return view('user.viewpinjam', ['datas' => $dataBuku], ['title' => 'Detail Buku']);
    }
}
