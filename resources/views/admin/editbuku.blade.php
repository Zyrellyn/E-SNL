@extends('layouts.admin')

{{-- HEADING --}}
@section('container')
  {{-- ISI --}}

@foreach ($editbuku as $edit)
<form action="/editbuku/{{$edit->id}}/store" method="POST" >
  {{ csrf_field() }}
<div class="grid">  
  <div class="col-2" style="margin-left: 50px">
    <div >
      <h6 class="dark:text-slate-400 text-light">Kode Buku</h6>
      <input readonly type="text" value="{{ $edit->nomor_buku }}"  class="input-view input-bordered rounded-sm mb-4  text-light" />
    </div>
    <div>
      <h6 class="dark:text-slate-400 text-light">Cover</h6>
      <img style="aspect-ratio:2/3; width: 250%; margin-top:5px;  border: 2px solid white; border-radius: 5px" src="{{ asset('storage/images/'.$edit->gambar) }}" alt="image">
    </div>
  </div>
  <div class="col-2">
    <div>
      <h6 class="dark:text-slate-400 text-light">Judul Buku</h6>
        <input required name="judul" type="text" value="{{ $edit->judul }}" placeholder="Masukan Judul Buku"   class="input-view input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4  text-light" />
    </div>
    <div>
      <h6 class="dark:text-slate-400 text-light">Penulis</h6>
        <input required name="penulis" value="{{ $edit->penulis }}" type="text" placeholder="Masukan Nama Penulis" class="input-view input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4  text-light" />
    </div>
    <div>
      <h6 class="dark:text-slate-400 text-light">Penerbit</h6>
        <input required name="penerbit" value="{{ $edit->penerbit }}" type="text" placeholder="Masukan Nama Pernerbit" class="input-view input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4  text-light" />
    </div>
    <div>
      <h6 class="dark:text-slate-400 text-light">Kategori</h6>
      <select required name="kategori" class="select select-bordered rounded-sm dark:bg-neutral dark:text-slate-400 w-full max-w-xs mb-4" name="" id="">
        <option @if ($edit->kategori == "romance")
          Selected
          @endif value="romance" class="bg-black"> Romance </option>
        <option @if ($edit->kategori == "fantasy")
          Selected
          @endif value="fantasy" class="bg-black"> Fantasy </option>
        <option @if ($edit->kategori == "horor")
          Selected
          @endif value="horor" class="bg-black"> Horror </option>
        <option @if ($edit->kategori == "mystery")
          Selected
          @endif value="mystery" class="bg-black"> Mystery </option>
        <option @if ($edit->kategori == "comedy")
          Selected
          @endif value="comedy" class="bg-black"> Comedy </option>
        <option @if ($edit->kategori == "thriller")
          Selected
          @endif value="thriller" class="bg-black"> Thriller </option>
        <option @if ($edit->kategori == "petualangan")
          Selected
          @endif value="petualangan" class="bg-black"> Adventure </option>
      </select> 
    </div>
    <h6 class="text-light">Sinopsis</h6>
    <textarea required name="sinopsis" value="" class="input-view input-bordered rounded-sm mb-2   text-light" cols="60" rows="5">{{ $edit->sinopsis }}</textarea>
  </div>
</div>
<div class="button-view m-2">
  <a href="/master"  > <- kembali </a>
  <a href="#popup"  class="btn"> Edit </a>
</div>

<div style="overflow: hidden" class="popup" id="popup">
  <div class="popup__content">
    <h2 class="heading-secondary">Apakah anda yakin?</h2>
    <p class="popup__text">
      Data buku akan diedit dan disimpan apabila anda menekan tombol "Ya, edit"
    </p>
    <a href="#" class="button" style="margin-left: 5px;">Kembali</a>
    <button  class="btn" style="float: right;" > Ya, edit </button>
  </div>
</div>
</form>
@endforeach
<script>
  const hamburgerIcons = document.getElementById("hamburgerIcons");
const sidebar = document.getElementById("sidebar");


hamburgerIcons.addEventListener("click", () => {

  sidebar.style.display === "flex"
      ? (sidebar.style.display = "none")
      : (sidebar.style.display = "flex");
});
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Mengambil elemen formulir
    const form = document.querySelector('form');

    // Menangkap peristiwa keypress pada formulir
    form.addEventListener("keypress", function(event) {
        // Periksa apakah tombol yang ditekan adalah tombol "Enter"
        if (event.key === "Enter") {
            // Mencegah aksi default dari tombol "Enter" (biasanya untuk submit form)
            event.preventDefault();
        }
    });
});

</script>
@endsection