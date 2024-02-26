@extends('layouts.admin')

{{-- HEADING --}}

@section('container')
{{-- ISI --}}

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