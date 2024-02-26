@extends('layouts.admin')

{{-- HEADING --}}
@section('search')
<style>
  .notification-success {
    width:  100%;
    padding: 5px;
    border: 1px solid transparent;
    border-radius: 5px;
    margin-bottom: 20px;
    animation: fadeOut 2s ease-in-out forwards; /* Sesuaikan dengan durasi notifikasi */
    color: #ffffff;
    font-weight: 400;
    background-color: #0cbf35;
  }
  .notification-delete{
    width:  100%;
    padding: 5px;
    border: 1px solid transparent;
    border-radius: 5px;
    margin-bottom: 20px;
    animation: fadeOut 2s ease-in-out forwards; /* Sesuaikan dengan durasi notifikasi */
    color: #ffffff;
    font-weight: 400;
    background-color: #be0000;
  }

  @keyframes fadeOut {
      0% { opacity: 1; }
      50% { opacity: 1; }
      100% { opacity: 0; display: none; }
  }

</style>
<div class="app-content-actions">
  <form action="/search" method="GET" style="display: flex;">
    @csrf
    <input class="search-bar" placeholder="Search..." type="text" name="search"/>
    <button type="submit" style="margin-left: 5px;">Search</button>
  </form>
  @if (Auth::user()->level == 'admin')
  <a href="/buku1"><button class="app-content-headerButton rounded-4">+ Tambah Buku</button></a>
  @endif 
</div>
@endsection


@section('container')

  {{-- ISI --}}
  @if (Auth::user()->level == 'admin')
  <div class="">
    <div class="shell">
      @if(session('success'))
      <div class="notification-success">
          <h5>{{ session('success') }}</h5>
      </div>
      @endif
      @if(session('delete'))
      <div class="notification-delete">
          <h5>{{ session('delete') }}</h>
      </div>
      @endif

      <div >
        <div class="" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(192px, 1fr)); gap: 20px;"> <!-- Menambahkan gap antar buku -->
          @foreach ($bukus as $buku)
          <a href="/view/{{$buku->id}}" class="" style="width: 192px">
            <img  style="aspect-ratio:2/3; width: 192px" src="{{ asset("storage/images/".$buku->gambar) }}" alt="" class=""/>
            <div style="" class="mt-3 flex justify-between text-sm">
              <div>
                <h3 class="" style="color: white;">
                  {{ Str::limit($buku->judul, 17, '...') }}
                </h3>
                <h6 class="" style="color: white">
                  {{Str::limit($buku->penulis, 15, '...')}}
                </h6>
                <p class="" style="color: white; ">
                  {{ Str::limit($buku->sinopsis, 60, '...') }}
                </p>
              </div>
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </div>  
  </div>
  @endif

  @if (Auth::user()->level == 'user')
  <div class="" >
    <div class="shell">
      <div >
        <div class="" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(192px, 1fr)); gap: 20px;"> 
          @foreach ($book as $buku)
          <a href="/viewpinjam/{{$buku->id}}" class="" style="width: 192px">
            <img  style="aspect-ratio:2/3; width: 192px" src="{{ asset("storage/images/".$buku->gambar) }}" alt="" class=""/>
            <div style="" class="mt-3 flex justify-between text-sm">
              <div>
                <h3 class="" style="color: white;">
                  {{ Str::limit($buku->judul, 17, '...') }}
                </h3>
                <h6 class="" style="color: white">
                  {{Str::limit($buku->penulis, 15, '...')}}
                </h6>
                <p class="" style="color: white; ">
                  {{ Str::limit($buku->sinopsis, 60, '...') }}
                </p>
              </div>
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  @endif
@endsection
