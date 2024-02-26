@extends('layouts.admin')

{{-- HEADING --}}

@section('container')

{{-- isi --}}

<table class="table-view" style="color: white">
  <thead class="table-view-head" >
    <tr>
      <th style="font-weight: 500; justify-content: center;">NO.</th>
      <th style="font-weight: 500; justify-content: center;">Nomor Buku</th>
      <th style="font-weight: 500; justify-content: center;">Tanggal Pinjam</th>
      <th style="font-weight: 500; justify-content: center;">Tanggal Kembali</th>
      <th style="font-weight: 500; justify-content: center;">Nama Peminjam</th>
      <th style="font-weight: 500; justify-content: center;">Judul Buku</th>
      <th style="font-weight: 500; justify-content: center;">Status</th>
      <th style="font-weight: 500; display: flex; justify-content: center;">Aksi</th>
    </tr>
  </thead>
  <tbody style>
    <?php $i=1;?>
    @foreach ($datas as $data)
        
    <tr class="" >
      <td>{{ $i }}.</td>
      <td>{{ $data->buku_tabel->nomor_buku }}</td>
      <td>{{ date('Y-m-d', strtotime($data->tanggal_pinjam)) }}</td>
      <td>{{ date('Y-m-d', strtotime($data->tanggal_kembali)) }}</td> 
      <td>{{ $data->user->nama_lengkap}}</td>
      <td>{{ $data->buku_tabel->judul }}</td>  
      <td ><p class="@if ($data->status == 'Verif')
          verif
        @elseif($data->status == 'Dikembalikan')
          done
        @elseif($data->status == 'Terpinjam')
          save
        @endif" style="color: white; font-size: 15px">{{ $data->status }}</p></td>  
      <td> 
        @if ($data->status == 'Verif')
        <a href="#popup_{{ $data->id }}" style="display: flex; justify-content: center;">Kembalikan</a> 
        @endif
      </td>
    </tr>
    <div style="overflow: hidden" class="popup" id="popup_{{$data->id}}">
      <div class="popup__content">
        <h3 class="heading-secondary">Apakah anda yakin ingin mengembalikan buku ini?</h3>
        <br><br>
        <a href="/verifikasi" class="button" style="margin-left: 5px;">Tidak</a>
        <a href="/verifikasi/{{$data->id}}" class="btn" type="submit"style="float: right;" > Ya, kembalikan </a>
      </div>
    </div>
    <?php $i++; ?>
    @endforeach
  </tbody>
</table>
@endsection
