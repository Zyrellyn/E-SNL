@extends('layouts.admin')

{{-- HEADING --}}

@section('container')

{{-- ISI --}}
<div class="container w-100" style="overflow: hidden">
  <div class="app-content-actions" style="overflow: hidden">
    <div class="app-content-actions-wrapper">
      <div class="filter-button-wrapper jsFilter"></div>   
    </div>
  </div>
    {{-- KAMU NGISINYA DISINI --}}
  <div class="" style="overflow: hidden">
    <form action="/buku1/store" method="POST" enctype="multipart/form-data">
        <div class="grid-2">
          {{ csrf_field() }}
          <div class="input-text-user">
              <h6 class="dark:text-slate-400 text-light">Judul Buku</h6>
              <input required name="judul" type="text" placeholder="Masukkan judul" class="input input-bordered rounded- dark:bg-neutral dark:border-slate-400 dark:text-slate-400  max-w-xs mb-4" />
              <div class="input-text-user">
                <h6 class="dark:text-slate-400 text-light">Penulis </h6>
                <input required name="penulis" type="text" placeholder="Nama Penulis" class="input input-bordered rounded- dark:bg-neutral dark:border-slate-400 dark:text-slate-400  max-w-xs mb-4" />
            </div>
            <div>
              <h6 class=" dark:text-slate-400 text-light">Penerbit</h6>
              <input required name="penerbit" type="text" placeholder="Nama Penerbit" class="number-to-text input input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4" />
            </div>
            <div>
              <h6 class="dark:text-slate-400 text-light">Kategori</h6>
              <select required name="kategori" class="select select-bordered rounded-sm dark:bg-neutral dark:text-slate-400 w-full max-w-xs mb-4" name="" id="">
                <option value="romance" class="bg-black"> Romance </option>
                <option value="fantasy" class="bg-black"> Fantasy </option>
                <option value="horor" class="bg-black"> Horror </option>
                <option value="mystery" class="bg-black"> Mystery </option>
                <option value="comedy" class="bg-black"> Comedy </option>
                <option value="thriller" class="bg-black"> Thriller </option>
                <option value="petualangan" class="bg-black"> Adventure </option>
              </select>
            </div>
          </div>
          <div>
            <form id="photoForm">
              <input  required class="image-photo " type="file" id="photoInput" accept="image/*" name="gambar" onchange="previewPhoto()">
            </form>
            <div>
              <h6 class=" dark:text-slate-400 text-light">Sinopsis</h6>
              <textarea required class="input-view input-bordered rounded-sm mb-4  text-light" name="sinopsis" id="" cols="60" rows="10 "></textarea>
            </div>
          </div>
          <div style="overflow: hidden" class="popup" id="popup">
            <div class="popup__content">
                <h2 class="heading-secondary">Apakah anda yakin?</h2>
                <p class="popup__text">
                  Data buku akan disimpan apabila anda menekan tombol "Tambah Buku"
                </p>
                <a href="/master"><button type="submit" class="btn" style="float: right;" >Tambah Buku</button></a>
                <a href="#" class="button" style="margin-left: 5px;">Kembali</a>
            </div>
          </div>
          <div class="button-view">
            <a href="/master" style="float: right;"> <- Kembali</a>
          </div>
          <div class="form-row submit-btn" style="overflow: hidden">
            <div style="margin-top: 10px">
              <div class="some-text">
                <a class="btn" href="#popup" >+ Tambah Buku</a>
              </div>
            </div>
            <div>
              <input type="hidden" name="status" id="" value="Tersedia">
            </div>
          </div>
        </div>
        </div>
      </form>
  </div>
</div>
@endsection


