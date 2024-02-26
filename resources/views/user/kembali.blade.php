@extends('layouts.admin')

{{-- HEADING --}}

@section('container')

{{-- isi --}}

<table class="table-view" style="color: white">
  <thead class="table-view-head" >
    <tr>
      <th style="font-weight: 500; justify-content: center;">NO.</th>
      <th style="font-weight: 500; justify-content: center;">Nomor Buku</th>
      <th style="font-weight: 500; justify-content: center;">Judul Buku</th>
      <th style="font-weight: 500; justify-content: center;">Penulis</th>
      <th style="font-weight: 500; justify-content: center;">Penerbit</th>
      <th style="font-weight: 500; justify-content: center;">Kategori</th>
      <th style="font-weight: 500; display: flex; justify-content: center;">Aksi</th>
    </tr>
  </thead>
  <tbody style>
    <?php $i=1;?>
    @foreach($datas as $data)
    <tr class="" >
      <td>{{ $i }}.</td>
      <td> {{ $data->buku_tabel->nomor_buku }} </td>
      <td> {{ $data->buku_tabel->judul }}  </td>
      <td> {{ $data->buku_tabel->penulis }}  </td>
      <td> {{ $data->buku_tabel->penerbit }}  </td>
      <td> {{ $data->buku_tabel->kategori }}  </td>
      <td> 
        @if($data->status == 'Terpinjam')
          <a href="#popup_{{ $data->id }}" style="display: flex; justify-content: center;">Kembalikan</a> 
        @elseif($data->status == 'Verif')
        <div class="verif" >
          <p style="color: white; font-size: 15px">Verifikasi</p>
        </div> 
        @elseif($data->status == 'Dikembalikan')
        <div class="done" >
          <p style="color: white; font-size: 15px">Dikembalikan</p>
        </div> 
        @endif
      </td>
    </tr>
    <div style="overflow: hidden" class="popup" id="popup_{{$data->id}}">
      <div class="popup__content">
        <h3 class="heading-secondary">Apakah anda yakin ingin mengembalikan buku ini?</h3>
        <br><br>
        <a href="/kembali" class="button" style="margin-left: 5px;">Tidak</a>
        <a href="/kembali/{{ $data->id }}" class="btn" style="float: right;" > Ya, kembalikan </a>
      </div>
    </div>
    <?php $i++; ?>
    @endforeach
  </tbody>
</table>
@endsection
