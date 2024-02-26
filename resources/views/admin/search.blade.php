@extends('layouts.admin')

{{-- HEADING --}}



@section('search')
<div class="app-content-actions">
  <form action="/search" method="POST" style="display: flex;">
    @csrf
    <input class="search-bar" placeholder="Search..." type="text" name="search"/>
    <button type="submit" style="margin-left: 5px">Search</button>
  </form> 
  @if (Auth::user()->level == 'admin')
  <a href="/buku1"><button class="app-content-headerButton rounded-4">+ Tambah Buku</button></a>
  @endif
</div>
@endsection

@section('container')

  {{-- ISI --}}
  <div class="">
    <div class="shell">
      <div>
        @if (isset($pesan))
          <h4 style=" color: #ff0019;font-weight: bold; text-align: center; margin-top: 40px">{{ $pesan }}</h4>
        @else
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
        @endif
      </div>
    </div>  
  </div>

@endsection
