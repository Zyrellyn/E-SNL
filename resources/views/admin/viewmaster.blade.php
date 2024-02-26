@extends('layouts.admin')
<style>
  .notification-update{
    position: absolute;
    width:  80%;
    padding: 5px;
    border: 1px solid transparent;
    border-radius: 5px;
    margin-bottom: 15px;
    animation: fadeOut 2s ease-in-out forwards; /* Sesuaikan dengan durasi notifikasi */
    color: #ffffff;
    font-weight: 400;
    background-color: #0cbf35;
  }
  
  @keyframes fadeOut {
      0% { opacity: 1; }
      90% { opacity: 1; }
      100% { opacity: 0; display: none; }
  }
  
</style>
{{-- HEADING --}}
@section('container')
  {{-- ISI --}}
  @if(session('success'))
  <div class="notification-update">
      <h5>{{ session('success') }}</h5>
  </div>
  @endif
<div class="grid">
  @foreach ($datas as $data)
  <div class="col-2" style="margin-left: 50px">
    <div >
      <h6 class="dark:text-slate-400 text-light">Kode Buku</h6>
      <input readonly type="text" value="{{ $data->nomor_buku }}"  class="input-view input-bordered rounded-sm mb-4  text-light" />
    </div>
    <div>
      <h6 class="dark:text-slate-400 text-light">Cover</h6>
      <img style="aspect-ratio:2/3; width: 250%; margin-top:5px;  border: 2px solid white; border-radius: 5px" src="{{ asset('storage/images/'.$data->gambar) }}" alt="image">
    </div>
  </div>
  <div class="col-2">
    <div>
      <h6 class="dark:text-slate-400 text-light">Judul Buku</h6>
        <input readonly type="text" value="{{ $data->judul }}"  class="input-view input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4  text-light" />
    </div>
    <div>
      <h6 class="dark:text-slate-400 text-light">Penulis</h6>
        <input readonly value="{{ $data->penulis }}" type="text" placeholder="isinya penulis" class="input-view input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4  text-light" />
    </div>
    <div>
      <h6 class="dark:text-slate-400 text-light">Penerbit</h6>
        <input readonly value="{{ $data->penerbit }}" type="text" placeholder="isinya pernerbit" class="input-view input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4  text-light" />
    </div>
    <div>
      <h6 class="dark:text-slate-400 text-light">Kategori</h6>
        <input readonly value="{{ $data->kategori }}" type="text" placeholder="isinya pernerbit" class="input-view input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4  text-light" />
    </div>
    <h6 class="dark:text-slate-400 text-light">Sinopsis</h6>
    <textarea readonly value="" class="input-view input-bordered rounded-sm mb-4  text-light" cols="60" rows="5">{{ $data->sinopsis }}</textarea>
  </div>
</div>
@endforeach
<div class="button-view">
  @if ($data->status == 'Tersedia')
  <a href="#popup" class="btn"> Hapus </a>
  @endif
  <a href="/editbuku/{{$data->id}}" class="btn"> Edit </a>
  <a href="/master" class="btn" > Kembali </a>
</div>

<div style="overflow: hidden" class="popup" id="popup">
  <div class="popup__content">
    <h2 class="heading-secondary">Apakah anda yakin?</h2>
    <p class="popup__text">
      Data buku akan terhapus apabila anda menekan tombol "Hapus"
    </p>
    <a href="/deletebuku/{{ $data->id }}"><button type="submit" class="btn" style="float: right;" >Hapus</button></a>
    <a href="#" class="button" style="margin-left: 5px;">Kembali</a>
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
@endsection