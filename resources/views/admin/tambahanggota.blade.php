@extends('layouts.admin')

{{-- HEADING --}}

@section('container')

{{-- ISI --}}
<div class="container w-100 h-100">
<div class="app-content-actions">
    <div class="app-content-actions-wrapper">
    <div class="filter-button-wrapper jsFilter">
        </div>
        
    </div>
    </div>
    {{-- KAMU NGISINYA DISINI --}}
    <div>
        <form action="/tambahan/store" method="POST">
            <div class="grid-2">
                {{ csrf_field() }}
                <div>
                    <h6 class="dark:text-slate-400 text-light">Email Address</h6>
                    <input  name="email" placeholder="Masukan Email" class="input input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4" id="email" type="email" class="form-control" required autocomplete="email" />
                </div>
                <div class="input-text-user">
                    <h6 class="dark:text-slate-400 text-light">Nama Lengkap</h6>
                    <input required name="nama_lengkap" type="text" placeholder="Masukan Nama Lengkap" class="input input-bordered rounded- dark:bg-neutral dark:border-slate-400 dark:text-slate-400  max-w-xs mb-4" />
                </div>
                <div class="input-text-user">
                    <h6 class="dark:text-slate-400 text-light">Password</h6>
                    <input required name="password" type="password" placeholder="Masukan Password" class="input input-bordered rounded- dark:bg-neutral dark:border-slate-400 dark:text-slate-400  max-w-xs mb-4" />
                </div>
                <div>
                    <h6 class=" dark:text-slate-400 text-light">No. Handphone</h6>
                    <input required name="telepon" type="number" placeholder="Masukan No. HP" class="number-to-text input input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4" />
                </div>
                <div>
                    <h6 class="dark:text-slate-400 text-light">Jenis Kelamin</h6>
                    <select required name="jenis_kelamin" class="select select-bordered rounded-sm dark:bg-neutral dark:text-slate-400 w-full max-w-xs mb-4" name="" id="">
                        <option value="perempuan" class="bg-black"> Perempuan </option>
                        <option value="laki-laki" class="bg-black"> Laki-Laki </option>
                    </select>
                </div>
                <div class="button-view">
                    <a href="/anggota" style="float: right;"> <- Kembali</a>
                </div>
                <div>
                    <input type="hidden" name="level" id="" value="user">
                </div>
                <div>
                    <br><br><br>
                </div>
                <div class="button-view">
                    <a href="#popup" style="float: right;" class="btn"> Tambah Anggota </a>
                </div>
                <div style="overflow: hidden" class="popup" id="popup">
                    <div class="popup__content">
                        <h2 class="heading-secondary">Apakah anda yakin?</h2>
                        <p class="popup__text">
                        Data anggota akan disimpan dan terdaftar apabila anda menekan tombol "Ya"
                        </p>
                        <a href="#" class="button" style="margin-left: 5px;">Kembali</a>
                        <button  class="btn" style="float: right;" > Ya </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
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


