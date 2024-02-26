@extends('layouts.app')
@section('content')
<div class="container" >
    <div class="row justify-content-center " style="min-height: calc(100vh - 55px); display: flex; flex-direction: column; align-items: center;justify-content: center">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div class="card-header text-center">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama Lengkap') }}</label>
                            <div class="col-md-6">
                                <input id="nama_lengkap" type="text" class="form-control @error('name') is-invalid @enderror" name="nama_lengkap" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control number-to-text" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
    
                        <style>
                        input[type=number]::-webkit-inner-spin-button,
                        input[type=number]::-webkit-outer-spin-button {
                        -webkit-appearance: none;
                        margin: 0;
                        }
                        /* Selector khusus untuk browser Firefox */
                        input[type=number] {
                        -moz-appearance: textfield;
                        }
                        </style>

                        <div class="row mb-3">
                            <label for="Telepon" class="col-md-4 col-form-label text-md-end">{{ __('No. Telepon') }}</label>
                            <div class="col-md-6">
                                <input id="telepon" type="number" class="form-control" name="telepon" required autocomplete="telepon">
                            </div>
                        </div>

                        <style>
                            input[type="radio"] {
                                accent-color: #007bff; /* Change the color of the radio button itself */
                                appearance: none; /* Remove default radio button style */
                                width: 20px;
                                height: 20px;
                                border-radius: 50%;
                                border: 2px solid #007bff;
                                outline: none; /* Remove black border */
                                margin-right: 5px;
                                margin-top: 3px;
                            }
                    
                            input[type="radio"]:checked {
                                background-color: #007bff;
                            }
                    
                            label {
                                cursor: pointer;
                                user-select: none;
                            }
                        </style>

                        <div class="row mb-4">
                            <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-end">{{ __('Jenis Kelamin') }}</label>
                            <div class="col-md-6">
                                <label> <input type="radio" name="jenis_kelamin" value="Laki-Laki"  id="jenis_kelamin" required autocomplete="jenis_kelamin">Laki-Laki</label>
                                <br>
                                <label><input type="radio" name="jenis_kelamin" value="Perempuan"  id="jenis_kelamin" required autocomplete="jenis_kelamin"> Perempuan</label>
                            </div>
                        </div>

                        <input type="hidden" name="level" id="" value="user">
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


