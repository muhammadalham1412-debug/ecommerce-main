@extends('layouts.app')

@section('content')
<div class="auth-background">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card shadow-sm auth-card">

                    {{-- Header --}}
                    <div class="card-header text-center auth-card-header">
                        <h4 class="mb-0">📝 Buat Akun Baru</h4>
                    </div>

                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            {{-- Name --}}
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text"
                                       name="name"
                                       value="{{ old('name') }}"
                                       class="form-control auth-input @error('name') is-invalid @enderror"
                                       required
                                       autofocus>
                                @error('name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email"
                                       name="email"
                                       value="{{ old('email') }}"
                                       class="form-control auth-input @error('email') is-invalid @enderror"
                                       required>
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Password --}}
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password"
                                       name="password"
                                       class="form-control auth-input @error('password') is-invalid @enderror"
                                       required>
                                @error('password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Confirm Password --}}
                            <div class="mb-4">
                                <label class="form-label">Konfirmasi Password</label>
                                <input type="password"
                                       name="password_confirmation"
                                       class="form-control auth-input"
                                       required>
                            </div>

                            {{-- Button Register --}}
                            <div class="d-grid">
                                <button type="submit" class="btn btn-login btn-lg">
                                    Daftar
                                </button>
                            </div>

                            {{-- Login Link --}}
                            <p class="mt-4 text-center mb-0">
                                Sudah punya akun?
                                <a href="{{ route('login') }}" class="auth-link fw-bold">
                                    Login Sekarang
                                </a>
                            </p>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
