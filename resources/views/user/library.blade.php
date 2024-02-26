@extends('layouts.admin')

{{-- HEADING --}}

@section('container')
  {{-- isi --}}
<table class="table-view" style="color: white;">
  <thead class="table-view-head" >
    <tr>
      <th style="font-weight: 500">NO.</th>
      <th style="font-weight: 500">Nomor Buku</th>
      <th style="font-weight: 500">Judul Buku</th>
      <th style="font-weight: 500">Penulis</th>
      <th style="font-weight: 500">Penerbit</th>
      <th style="font-weight: 500">Kategori</th>
      <th style="font-weight: 500">Status</th>
    </tr>
  </thead>
  <tbody style>
    <?php $i=1;?>
    @foreach ($datas as $data)
        
    <tr class="" >
      <td>{{ $i }}.</td>
      <td>{{ $data->buku_tabel->nomor_buku }}</td>
      <td>{{ $data->buku_tabel->judul }}</td>
      <td>{{ $data->buku_tabel->penulis }}</td>
      <td>{{ $data->buku_tabel->penulis }}</td>
      <td>{{ $data->buku_tabel->kategori }}</td>
      <td>
        <p class="@if ($data->status == 'Verifikasi')
          verif
        @elseif($data->status == 'Dikembalikan')
          done
        @elseif($data->status == 'Terpinjam')
          save
        @endif" style="color: white; font-size: 15px">{{ $data->status }}</p></td>  
      </td>
    </tr>
    <?php $i++; ?>
    @endforeach
  </tbody>
</table>
@endsection