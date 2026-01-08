@extends('layouts.app')

@section('content')
<div class="auth-background">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-sm auth-card">

                    {{-- Header --}}
                    <div class="card-header text-center auth-card-header">
                        <h4 class="mb-0">🔐 Login ke Akun Anda</h4>
                    </div>

                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            {{-- Email --}}
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email"
                                       name="email"
                                       value="{{ old('email') }}"
                                       class="form-control auth-input @error('email') is-invalid @enderror"
                                       required
                                       autofocus
                                       placeholder="nama@email.com">
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
                                       required
                                       placeholder="••••••••">
                                @error('password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Remember --}}
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="remember" id="remember"
                                       {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    Ingat Saya
                                </label>
                            </div>

                            {{-- Button Login --}}
                            <div class="d-grid">
                                <button type="submit" class="btn btn-login btn-lg">
                                    Login
                                </button>
                            </div>

                            {{-- Forgot --}}
                            <div class="mt-3 text-center">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="auth-link">
                                        Lupa Password?
                                    </a>
                                @endif
                            </div>

                            <hr>

                            {{-- Google --}}
                            <div class="d-grid">
                                <a href="{{ route('auth.google') }}" class="btn btn-google">
                                    <img src="https://www.svgrepo.com/show/475656/google-color.svg"
                                         width="20" class="me-2">
                                    Login dengan Google
                                </a>
                            </div>

                            {{-- Register --}}
                            <p class="mt-4 text-center mb-0">
                                Belum punya akun?
                                <a href="{{ route('register') }}" class="auth-link fw-bold">
                                    Daftar Sekarang
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
