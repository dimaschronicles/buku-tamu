@extends('layouts.template_admin')
@section('content_admin')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ $title }}</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="card p-3">
                    @include('sweetalert::alert')

                    @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <form action="/savepass" method="POST">
                        @csrf
                        <input type="hidden" name="id_user" id="id_user" value="{{ $user->id }}">
                        <div class="mb-3">
                            <label for="current_password" class="form-label">Password Saat Ini</label>
                            <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                                id="current_password" name="current_password">
                            @error('current_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="new_password" class="form-label">Password Baru</label>
                            <input type="password" class="form-control @error('new_password') is-invalid @enderror"
                                id="new_password" name="new_password">
                            @error('new_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="new_password_conf" class="form-label">Konfirmasi Password Baru</label>
                            <input type="password" class="form-control @error('new_password_conf') is-invalid @enderror"
                                id="new_password_conf" name="new_password_conf">
                            @error('new_password_conf')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="show_pass" name="show_pass"
                                onclick="showPass()">
                            <label class="form-check-label" for="show_pass">Tampilkan Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection