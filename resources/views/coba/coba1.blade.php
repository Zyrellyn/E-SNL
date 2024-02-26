<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> halcoba | Admin </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<link rel="stylesheet" href="css/admin.css">
</head>
<body>
<div class="app-container">
  <div id="sidebar" class="sidebar" style="display: flex">
    <div class="sidebar-header">
      <div class="app-judul">
        <span> E-SNL </span>
      </div>
    </div>
    <ul class="sidebar-list ">
      <li class="sidebar-list-item active">
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" mviewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          <span> Dashboard </span>
        </a>
      </li>
      <li class="sidebar-list-item ">
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          <span> Master Buku </span>
        </a>
      </li>
      <li class="sidebar-list-item">
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
          <span> Anggota </span>
        </a>
      </li>
      <li class="sidebar-list-item">
        <a href="/riwayat">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
          <span> Riwayat </span>
        </a>
      </li>
    </ul>
    <div class="account-info">
      <div class="account-info-picture">
        <img src="https://images.unsplash.com/photo-1527736947477-2790e28f3443?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTE2fHx3b21hbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="Account">
      </div>
      <div class="account-info-name">Monica G.</div>
      <button class="account-info-more">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
      </button>
    </div>
    </div>
    <div style="width: 100%;" class="content-body w-full min-vh-100">
      <div class="app-content ">
        <div class="app-content-header">
          <div id="hamburgerIcons" style="cursor: pointer" class="icons-app"> <i class="fas fa-bars"></i></div>
          <h1 class="app-content-headerText"> hal coba</h1>
          <button class="mode-switch" title="Switch Theme"></button>
          @yield('button-add')
          
      </div>
      <div class="container">
        <h3 class="text-light">Data Coba </h3>
      
        <a href="/pegawai/tambah"> + Tambah anggota Baru</a>
        
        <br/>
        <br/>
      
        <table>
          <tr style="color: white">
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
            <th>Password</th>
            <th>Opsi</th>
          </tr>
          @foreach($anggota as $a)
          <tr style="color: white">
            <td>{{ $a->nama_lengkap }}</td>
            <td>{{ $a->username }}</td>
            <td>{{ $a->jenis_kelamin }}</td>
            <td>{{ $a->telepon }}</td>
            <td>{{ $a->password }}</td>
            <td>
              <a href=" {{ $a->id }}">Edit</a>
              |
              <a href=" {{ $a->id }}">Hapus</a>
            </td>
          </tr>
          @endforeach
        </table>
      </div> class="input input-bordered rounded- dark:bg-neutral dark:border-slate-400 dark:text-slate-400  max-w-xs mb-4" 
      </div>
      <div>
      </div>
    </div>
    </div>
    <script>
        const hamburgerIcons = document.getElementById("hamburgerIcons");
    const sidebar = document.getElementById("sidebar");
    
    
    hamburgerIcons.addEventListener("click", () => {
    
        sidebar.style.display === "flex"
            ? (sidebar.style.display = "none")
            : (sidebar.style.display = "flex");
    });
    
    </script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>





@extends('layouts.admin')
{{-- HEADING --}}

@section('container')

{{-- ISI --}}
<div class="container w-100 h-100">
<div class="app-content-actions">
    <div class="app-content-actions-wrapper">
    <div class="filter-button-wrapper jsFilter">
        </div>
        
    </div>
    </div>
    {{-- KAMU NGISINYA DISINI --}}
    <div class="">
    @foreach($edit as $e)
        <form action="/edit/{id}/store" method="POST">
            <div class="grid-2">
                {{ csrf_field() }}
                <div>
                    <input type="hidden" name="id" value="{{ $e->id }}">
                </div>
                <div>
                    <h6 class="dark:text-slate-400 text-light">Username</h6>
                    <input required name="username" value="{{ $e->username }}" type="text" placeholder="Masukan Username" class="input input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4" />
                </div>
                <div class="input-text-user">
                    <h6 class="dark:text-slate-400 text-light">Nama Lengkap</h6>
                    <input required name="nama_lengkap" value="{{ $e->nama_lengkap }}" type="text" placeholder="Masukan Nama Lengkap" class="input input-bordered rounded- dark:bg-neutral dark:border-slate-400 dark:text-slate-400  max-w-xs mb-4" />
                </div>
                <div class="input-text-user">
                    <h6 class="dark:text-slate-400 text-light">Password</h6>
                    <input required name="password" value="{{ $e->password }}" type="password" placeholder="Masukan Password" class="input input-bordered rounded- dark:bg-neutral dark:border-slate-400 dark:text-slate-400  max-w-xs mb-4" />
                </div>
                <div>
                    <h6 class=" dark:text-slate-400 text-light">No. Handphone</h6>
                    <input required name="telepon" value="{{ $e->telepon }}" type="number" placeholder="Masukan No. HP" class="number-to-text input input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4" />
                </div>
                <div>
                    <h6 class="dark:text-slate-400 text-light">Jenis Kelamin</h6>
                    <select required name="jenis_kelamin" value="{{ $e->jenis_kelamin }}"class="select select-bordered rounded-sm dark:bg-neutral dark:text-slate-400 w-full max-w-xs mb-4" name="" id="">
                        <option value="perempuan" class="bg-black"> Perempuan </option>
                        <option value="laki-laki" class="bg-black"> Laki-Laki </option>
                    </select>
                </div>
                <div>
                    <input type="hidden" name="level" id="" value="user">
                </div>
                <div class="form-row submit-btn">
                    <div style="margin-top: 50px">
                        <button type="submit" class="btn"  href="#0">Tambah Anggota</button>
                    </div>
                </div>
            </div>
        </form>
        @endforeach
    </div>
</div>
@endsection



