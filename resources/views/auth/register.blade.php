<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Sekarang</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/media/image/favicon.png')}}"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{asset('vendors/bundle.css')}}" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}" type="text/css">
</head>
<body class="form-membership">

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<div class="form-wrapper">

    
    <h5>Buat Akun</h5>

    <!-- form -->
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="float-left">Nama Lengkap</label>
            <input type="text" name="name" class="form-control form-control-user @error('name') is-invalid @enderror" id="exampleFirstName"
                placeholder="Nama Lengkap">
                @error('name')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
        <div class="form-group">
            <label class="float-left">Alamat</label>
            <input type="text" name="alamat" class="form-control form-control-user @error('alamat') is-invalid @enderror" id="exampleFirstName"
                placeholder="Alamat Lengkap Lengkap">
                @error('alamat')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
        <div class="form-group">
            <label class="float-left">No Hp</label>
            <input type="text" name="no_hp" class="form-control form-control-user @error('no_hp') is-invalid @enderror" id="exampleFirstName"
                placeholder="No Hp">
                @error('no_hp')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
        <div class="form-group">
            <label class="float-left">Email</label>
            <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleInputEmail"
                placeholder="Alamat Email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
        <div class="form-group">
            <label class="float-left">Password</label>
            <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                id="exampleInputPassword" placeholder="Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
        <div class="form-group">
            <label class="float-left">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control form-control-user"
                id="exampleRepeatPassword" placeholder="Konfirmasi Password">
        </div>
        <div class="form-group">
            <label class="float-left">Foto KTP</label>
            <input type="file" name="foto" class="form-control form-control-user"
                id="exampleRepeatPassword">
        </div>
        <button type="submit" class="btn btn-primary btn-block">
            {{ __('Register') }}
        </button>
        <hr>
        <p class="text-muted">Sudah Punya Akun?</p>
        <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">Masuk</a>
    </form>
    <!-- ./ form -->


</div>

<!-- Plugin scripts -->
<script src="{{asset('vendors/bundle.js')}}"></script>

<!-- App scripts -->
<script src="{{asset('assets/js/app.min.js')}}"></script>
</body>
</html>

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

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
@endsection --}}
