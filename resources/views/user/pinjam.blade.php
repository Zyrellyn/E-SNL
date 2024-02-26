@extends('layouts.admin')

{{-- HEADING --}}

@section('search')
    <div class="app-content-actions">
      <input class="search-bar" placeholder="Search..." type="text">
    </div>
@endsection

@section('container')
  {{-- ISI --}}
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
@endsection