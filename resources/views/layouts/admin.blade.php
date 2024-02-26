<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> INI BELUM </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
  </head>
  <body>
    <div class="app-container">
      <div id="sidebar" class="sidebar" style="display: flex">
        <div class="sidebar-header">
          <div class="app-judul">
            <span> E-SNL </span>
          </div>
        </div>

        @if (Auth::user()->level == 'admin')
        <ul class="sidebar-list ">
          <li class="sidebar-list-item  {{ Request::is('/') ? 'active' : '' }}">
            <a href="/home">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" mviewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              <span> Dashboard </span>
            </a>
          </li>
          <li class="sidebar-list-item  {{ Request::is('master') ? 'active' : '' }} ">
            <a href="/master">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
              <span> Master Buku </span>
            </a>
          </li>
          <li class="sidebar-list-item  {{ Request::is('anggota') ? 'active' : '' }}">
            <a href="/anggota">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
              <span> Anggota </span>
            </a>
          </li>
          <li class="sidebar-list-item  {{ Request::is('verifikasi') ? 'active' : '' }}">
            <a href="/verifikasi">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
              <span> Verifikasi </span>
            </a>
          </li>
          <li class="sidebar-list-item  {{ Request::is('history') ? 'active' : '' }}">
            <a href="#" style="color: white">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
              <span>History</span>
            </a>
          </li>
          <li class="sidebar-list-item  {{ Request::is('trash') ? 'active' : '' }}">
            <a href="/trash">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
              <span>  Trash </span>
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="/backups" style="color: white">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
              <span>backups</span>
            </a>
          </li>
        </ul>
        @endif

        @if (Auth::user()->level == 'user')
        <ul class="sidebar-list ">
          <li class="sidebar-list-item  {{ Request::is('/') ? 'active' : '' }}">
            <a href="/home">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" mviewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              <span> Dashboard </span>
            </a>
          </li>
          <li class="sidebar-list-item  {{ Request::is('pinjam') ? 'active' : '' }}">
            <a href="/pinjam">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
              <span> Pinjam Buku </span>
            </a>
          </li>
          <li class="sidebar-list-item  {{ Request::is('kembali') ? 'active' : '' }}">
            <a href="/kembali">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
              <span> Kembalikan Buku </span>
            </a>
          </li>
          <li class="sidebar-list-item {{ Request::is('riwayatuser') ? 'active' : '' }}">
            <a href="/riwayatuser">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
              <span> Riwayat </span>
            </a>
          </li>
          
        </ul>
        @endif
      </div>
        <div style="width: 100%;" class="w-full">
          <div class="app-content ">
            <div class="app-content-header">
              <div id="hamburgerIcons" style="cursor: pointer" class="icons-app"> <i class="fas fa-bars"></i></div>
              <h1 class="app-content-headerText"> Ini Juga Belum</h1>
              <button class="mode-switch">
                <div class="account-info">
                  <div class="account-info-name">{{ Auth::user()->nama_lengkap }}</div>
                </div>
                <div class="logout">
                <a class="dropdown-item text-light" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
              </form>
              </div>  
            </button>
            @yield('button-add')
          </div>
          {{--  Search --}}
          <div>
            @yield('search')
          </div>
          <div class="container">
            @yield('container')
          </div>
          </div>
          <div>
          </div>
        </div>
        </div>
        <script src="js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script>
          function handleChange(select) {
            const value = select.value;
            if (value === '/backups') {
              window.location.href = value;
            } else {
              event.preventDefault();
              document.getElementById('logout-form').submit();
            }
          }
        </script>
</body>
</html>