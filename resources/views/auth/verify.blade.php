@extends('layouts.app')

@section('content')
<div class="auth-background">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card shadow-sm auth-card">

                    {{-- Header --}}
                    <div class="card-header text-center auth-card-header">
                        <h4 class="mb-0">📧 Verifikasi Email</h4>
                    </div>

                    <div class="card-body p-4 text-center">

                        @if (session('resent'))
                            <div class="alert alert-success">
                                Link verifikasi baru telah dikirim ke email Anda.
                            </div>
                        @endif

                        <p class="mb-3">
                            Sebelum melanjutkan, silakan cek email Anda untuk link verifikasi.
                        </p>

                        <p class="mb-4">
                            Jika Anda tidak menerima email,
                            silakan kirim ulang dengan tombol di bawah ini.
                        </p>

                        <form method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-login">
                                Kirim Ulang Email Verifikasi
                            </button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
