@extends('layouts.admin')

{{-- HEADING --}}

@section('container')

{{-- ISI --}}

@if (Auth::user()->level == 'admin')
<div class="row ">
    <div class="col-xl-6 col-lg-6">
        <div class="card l-bg-cherry">
            <div class="card-statistic-3 p-4">
            <div class="card-icon card-icon-large"><i class="fas fa-book"></i></div>
            <div class="mb-4">
                <h3 class="card-title mb-0">Jumlah Buku</h3>
            </div>
            <div class="col-8">
                <h6 class="d-flex align-items-center mt-5">
                    {{ $JumlahBuku }}  Buku
                </h6>
            </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card l-bg-blue-dark">
            <div class="card-statistic-3 p-4">
                <div class="card-icon card-icon-large"><i class="fas fa-users"></i>
                </div>
                <div class="mb-4">
                    <h3 class="card-title mb-0">Jumlah Anggota</h3>
                </div>
                <div class="col-8">
                    <h6 class="d-flex align-items-center mt-5">
                        {{ $JumlahAnggota }}  Anggota
                    </h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card l-bg-green-dark">
            <div class="card-statistic-3 p-4">
                <div class="card-icon card-icon-large"><i class="fas fa-hourglass-start "></i>
                </div>
                <div class="mb-4">
                    <h3 class="card-title mb-4">Buku Terpinjam</h3>
                </div>
                <div class="col-8 ">
                    <h6 class="d-flex align-items-center mt-5">
                        {{ $BukuPinjam }} Buku
                    </h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="card l-bg-orange-dark">
            <div class="card-statistic-3 p-4">
                <div class="card-icon card-icon-large"><i class="fas fa-arrow-right"></i></div>
                <div class="mb-4">
                    <h3 class="card-title mb-0">Buku Dikembalikan</h3>
                </div>
                <div class="col-8">
                    <h6 class="d-flex align-items-center mt-5">
                        {{ $BukuKembali}} Buku
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if (Auth::user()->level == 'user')

<div class="row">
    <a href="/pinjam" style="text-decoration: none"><div class="col-xl-6 col-lg-6">
        <div class="card l-bg-blue-dark">
            <div class="card-statistic-3 p-4">
                <div class="card-icon card-icon-large"><i class="fas fa-book-open"></i></div>
                <div class="mb-4">
                    <h2 class="card-title mb-0">Pinjam Buku</h2>
                </div>
            </div>
        </div></a>
    </div>
    <div class="col-xl-6 col-lg-6"><a href="/riwayatuser" style="text-decoration: none">
        <div class="card l-bg-green-dark">
            <div class="card-statistic-3 p-4">
                <div class="card-icon card-icon-large"><i class="fas fa-hourglass-start "></i></div>
                <div class="mb-4">
                    <h2 class="card-title mb-4">Riwayat</h2>
                </div>
            </div>
        </div></a>
    </div>
</div>
@endif


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