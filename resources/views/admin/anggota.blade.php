@extends('layouts.admin')
{{-- HEADING --}}
<style>
  .notification-success {
    width:  100%;
    padding: 5px;
    border: 1px solid transparent;
    border-radius: 5px;
    margin-bottom: 10px;
    animation: fadeOut 2s ease-in-out forwards; /* Sesuaikan dengan durasi notifikasi */
    color: #ffffff;
    font-weight: 400;
    background-color: #0cbf35;
  }
  .notification-update{
    width:  100%;
    padding: 5px;
    border: 1px solid transparent;
    border-radius: 5px;
    margin-bottom: 10px;
    animation: fadeOut 2s ease-in-out forwards; /* Sesuaikan dengan durasi notifikasi */
    color: #ffffff;
    font-weight: 400;
    background-color: #fe980a;
  }

  @keyframes fadeOut {
      0% { opacity: 1; }
      50% { opacity: 1; }
      100% { opacity: 0; display: none; }
  }

</style>
@section('search')
<div style="justify-content: right"  class="app-content-actions">
  <a href="/tambahan"><button class="app-content-headerButton rounded-4 bg">+ Tambah Anggota </button></a>
</div>
@endsection

@section('container')
  @if(session('success'))
    <div class="notification-success">
        <h5>{{ session('success') }}</h5>
    </div>
  @endif
  @if(session('update'))
    <div class="notification-update">
        <h5>{{ session('update') }}</h5>
    </div>
  @endif
{{-- ISI --}}
<table class="table-view" style="color: white;margin-top: 10px">
  <thead class="table-view-head" >
    <tr>
      <th style="font-weight: 500">NO.</th>
      <th style="font-weight: 500">Email Address</th>
      <th style="font-weight: 500">Nama Lengkap</th>
      <th style="font-weight: 500">Jenis Kelamin</th>
      <th style="font-weight: 500">No. Handphone</th>
      <th style="font-weight: 500">Aksi</th>
    </tr>
  </thead>
  <tbody style>
    <?php $i=1;?>
    @foreach($anggota as $a)
    <tr class="" >
      <td>{{ $i }}.</td>
      <td>{{ $a->email }}</td>
      <td>{{ $a->nama_lengkap }}</td>
      <td>{{ $a->jenis_kelamin }}</td>
      <td>0{{ $a->telepon }}</td>
      <td>
        <a href="/edit/{{$a->id}}">Edit</a>
      </td>
    </tr>
    <?php $i++; ?>
    @endforeach
  </tbody>
</table>


<script>
  function showPopup() {
    var popup = document.getElementById("popup");
    popup.style.display = "block";
  }
</script>
@endsection