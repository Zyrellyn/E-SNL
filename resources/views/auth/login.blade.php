@extends('layouts.app')

@section('content')
<div class="container" style="min-height: calc(100vh - 55px); display: flex; flex-direction: column; align-items: center;justify-content: center">
    <div style="width: 100%" class="row justify-content-center">
        <form class="login" method="POST" action="{{ route('login') }}">
            <div class="text-center">{{ __('Login') }}</div>
            @csrf
            <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                    <div class="col-md-6">
                        <input style="width: 220px" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                    <div class="col-md-6">
                        <input style="width: 220px" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="mb-0" style="padding: 10px">
                    <div class="col-md-8 x">
                        <button style="padding: 10px" type="submit" class="btn btn-primary">{{ __('Login') }}
                        </button>
                        
                    </div>
                </div>
                @if (Route::has('register'))
                <button style="padding: 10px" type="submit" class="btn btn-primary"><a href="{{ route('register') }}">{{ __('Register') }}</a>
                </button>
                @endif
        </form>
    </div>
</div>
@endsection


