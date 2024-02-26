@extends('layouts.admin')

{{-- HEADING --}}
@section('container')
<style>
  .notification {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 4px;
    animation: fadeOut 1.5s ease-in-out forwards; /* Sesuaikan dengan durasi notifikasi */
  }
  @keyframes fadeOut {
      0% { opacity: 1; }
      90% { opacity: 1; }
      100% { opacity: 0; display: none; }
  }
</style>
{{-- isi --}}
@if(session('trash'))
<div class="notification success">
    <h1>{{ session('trash') }}</h1>
</div>
@endif
<table class="table-view" style="color: white">
  <thead class="table-view-head" >
    <tr>
      <th style="font-weight: 500; justify-content: center;">NO.</th>
      <th style="font-weight: 500; justify-content: center;">Nomor Buku</th>
      <th style="font-weight: 500; justify-content: center;">Judul</th>
      <th style="font-weight: 500; justify-content: center;">Penulis</th>
      <th style="font-weight: 500; justify-content: center;">Penerbit</th>
      <th style="font-weight: 500; justify-content: center;">Kategori</th>
      <th style="font-weight: 500; justify-content: center;">Aksi</th>
    </tr>
  </thead>
  <tbody style>
    <?php $i=1;?>
    @foreach ($data as $d)
    <tr class="" >
      <td>{{ $i }}.</td>
      <td>{{$d->nomor_buku}}</td>
      <td>{{$d->judul}}</td>
      <td>{{$d->penulis}}</td>
      <td>{{$d->penerbit}}</td>
      <td>{{$d->kategori}}</td>  
      <td><a href="/restore/{{$d->id}}">restore</a></td>  
      <td> 
        {{-- @if($data->status == 'Terpinjam')
          <a href="#popup" style="display: flex; justify-content: center;">Kembalikan</a> 
        @elseif($data->status == 'Verif')
        <div class="verif" >
          <p style="color: white; font-size: 15px">Verifikasi</p>
        </div> 
        @elseif($data->status == 'Dikembalikan')
        <div class="done" >
          <p style="color: white; font-size: 15px">Dikembalikan</p>
        </div> 
        @endif --}}
      </td>
    </tr>
    <div style="overflow: hidden" class="popup" id="popup">
      <div class="popup__content">
          <h3 class="heading-secondary">Apakah anda yakin ingin mengembalikan buku ini?</h3>
          <br><br>
          <a href="/kembaliadmin" class="button" style="margin-left: 5px;">Tidak</a>
          <a href="#" class="btn" type="submit"style="float: right;" > Ya, kembalikan </a>
      </div>
  </div>
    <?php $i++; ?>
    @endforeach
  </tbody>
</table>
@endsection
