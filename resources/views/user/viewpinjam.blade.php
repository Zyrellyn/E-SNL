@extends('layouts.admin')
{{-- HEADING --}}
@section('container')

  {{-- ISI --}}
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
    <textarea readonly value="" class="input-view input-bordered rounded-sm mb-3  text-light" cols="65" rows="5">{{ $data->sinopsis }}</textarea>
  </div>
</div>
@endforeach
<div class="button-view">
  <a href="/master" style="margin-left: 50px" > <-Kembali </a>
    @if ($data->status ==  'Tersedia')
    <a
      
    href="/transaksi/{{$data->id}}" class="btn"> Pinjam Buku </a>
    @elseif ($data->status == 'Tidak Tersedia')
    <div class="new-message-box-warning" style="display: flex; justify-content: center;">
            <h6 style="color: white">Buku ini telah terpinjam</h6   >
    </div> 
    @endif
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