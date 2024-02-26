@extends('layouts.admin')
@section('container')

{{-- ISI --}}
<div class="container w-100 h-100">
  <div class="app-content-actions">
    <div class="app-content-actions-wrapper">
      <div class="filter-button-wrapper jsFilter"></div>
    </div>
  </div>
  {{-- KAMU NGISINYA DISINI --}}
  <div class="">
    @foreach($edit as $e)
    <form action="/edit/{id}/store" method="POST">
      <div class="grid-2">
        {{ csrf_field() }}
        <div>
          <h6 class="dark:text-slate-400 text-light">Email Address</h6>
          <input required name="email" value="{{ $e->email }}" type="text" placeholder="Masukan Username" class="input input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4" />
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
                  <select required name="jenis_kelamin" value="{{ $e->jenis_kelamin }}"class="select select-bordered rounded-sm dark:bg-neutral dark:text-slate-400 w-full max-w-xs mb-4" name="jenis_kelamin" id="">
                    <option value="perempuan"
                    @if ($e->jenis_kelamin == "perempuan")
                        selected
                    @endif
                    class="bg-black"> Perempuan </option>
                    <option value="laki-laki" 
                    @if ($e->jenis_kelamin == "laki-laki")
                        selected
                    @endif class="bg-black"> Laki-Laki </option>
                  </select>
                </div>
                <div>
                  <input type="hidden" name="id" value="{{ $e->id }}">
                </div>
                <div style="overflow: hidden" class="popup" id="popup">
                  <div class="popup__content">
                      <h2 class="heading-secondary">Apakah anda yakin?</h2>
                      <p class="popup__text">
                        Data anggota ini akan diedit jika anda menekan tombol "Ya"
                      </p>
                      <a href="#" class="button" style="margin-left: 5px;">Kembali</a>
                      <a href="/anggota"><button type="submit" id="button" class="btn" style="float: right;" >Ya</button></a>
                  </div>
                </div>
                <div class="form-row submit-btn" style="overflow: hidden">
                  <div style="margin-top: 50px">
                    <div class="some-text">
                      <div class="button-view">
                        <a href="#popup" style="float: right;" class="btn"> Edit Anggota </a>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            @endforeach
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
        