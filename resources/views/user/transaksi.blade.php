@extends('layouts.admin')

{{-- HEADING --}}
@section('container')
  {{-- ISI --}}
  <div class="">
    @foreach ($datas as $data)
    <form action="/transaksi/store" class="grid" method="POST">
      @csrf
      <input type="hidden" value="{{ $data->id }}" name="buku_id">
      <div class="" style="margin-left: 50px">
        <div  style="width: 100%">
          <h6 class="dark:text-slate-400 text-light">Tanggal Pinjam</h6>
          <input readonly namtype="text" class="input-view input-bordered rounded-sm mb-4  text-light" name="tanggal_pinjam"  value="{{ date('d-M-Y'); }}" />
        </div>
        <div style="width: 100%">
          <h6 class="dark:text-slate-400 text-light">Nama Lengkap</h6>
            <input readonly type="text" value="{{ Auth::user()->nama_lengkap }}"  class="input-view input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4  text-light" />
        </div>
        <div style="width: 100%">
          <h6 class="dark:text-slate-400 text-light">Jenis Kelamin</h6>
            <input readonly value="{{ Auth::user()->jenis_kelamin }}" type="text" placeholder="isinya penulis" class="input-view input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4  text-light" />
        </div>
        <div style="width: 100%">
          <h6 class="dark:text-slate-400 text-light">Tanggal Kembali</h6>
            <input required type="date" name="tanggal_kembali" id="tanggal" placeholder="Tanggal Kembali" class="input-view input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4  text-light" />
        </div>  
      </div>
      <div class="">
        <div  style="width: 100%">
          <h6 class="dark:text-slate-400 text-light">Kode Buku</h6>
          <input readonly type="text" value="{{ $data->nomor_buku }}"  class="input-view input-bordered rounded-sm mb-4  text-light" />
        </div>
        <div style="width: 100%">
          <h6 class="dark:text-slate-400 text-light">Judul Buku</h6>
            <input readonly id="tanggal" type="text" value="{{ $data->judul }}"  class="input-view input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4  text-light" />
        </div>
        <div style="width: 100%">
          <h6 class="dark:text-slate-400 text-light">Penulis</h6>
            <input readonly value="{{ $data->penulis }}" type="text" placeholder="isinya penulis" class="input-view input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4  text-light" />
        </div>
        
        <div style="width: 100%">
          <h6 class="dark:text-slate-400 text-light">Kategori</h6>
            <input readonly value="{{ $data->kategori }}" type="text" placeholder="isinya pernerbit" class="input-view input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs mb-4  text-light" />
        </div>
      </div>
      <div style="width: 100%; margin-top: 60px; display: flex;">
        <a href="/master" style="margin-left: 50px" > <-Kembali </a>
        </div>
      <div style="width: 100%; margin-top: 50px; display: flex; ">
        <a href="#popup" class="btn" style="float: left; width: 40%;text-decoration: white;" >Pinjam</a>
      </div>
      <div style="overflow: hidden" class="popup" id="popup">
        <div class="popup__content">
            <h3 class="heading-secondary">Apakah anda yakin ingin meminjam buku ini?</h3>
            <br><br>
            <a href="#" class="button" style="margin-left: 5px;">Tidak</a>
            <button  class="btn" type="submit"style="float: right;" > <a href="/kembali" style="text-decoration: white;">Pinjam</a></button>
        </div>
    </div>
    </form>
    @endforeach
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
  $(document).ready(function(){
    $('tanggal').datepicker({
      format: 'yyyy-mm-dd', // Format tanggal yang diinginkan
      todayHighlight: true, // Highlight tanggal hari ini
      autoclose: true // Otomatis menutup kalender setelah memilih tanggal
    });
  });
</script>

<script>
  // Dapatkan elemen input tanggal
  var inputTanggal = document.getElementById('tanggal');
  
  // Dapatkan tanggal saat ini
  var tanggalSekarang = new Date();
  
  // Tambahkan 10 hari ke tanggal saat ini
  tanggalSekarang.setDate(tanggalSekarang.getDate() + 7);
  
  // Format tanggal ke dalam format yang dapat diterima oleh input tanggal
  var tanggalBatasMaksimum = tanggalSekarang.toISOString().split('T')[0];
  
  // Set batas minimum input tanggal ke tanggal saat ini
  inputTanggal.min = new Date().toISOString().split('T')[0];

  // Set batas maksimum input tanggal ke 10 hari ke depan
  inputTanggal.max = tanggalBatasMaksimum;
</script>

@endsection