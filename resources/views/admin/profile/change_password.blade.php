@extends('layouts.main_admin')
@section('main_content_admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Ganti Password</h5>
                        <small class="text-muted float-end">Administrator</small>
                    </div>
                    <div class="card-body">
                        <form action="/profile/updatepassword" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="basic-default-name">Password Saat Ini</label>
                                <div class="col-sm-9">
                                    <input type="password"
                                        class="form-control @error('current_password') is-invalid @enderror"
                                        id="basic-default-name" name="current_password">
                                    @error('current_password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="basic-default-name">Password Baru</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control @error('new_password') is-invalid @enderror"
                                        id="basic-default-name" name="new_password">
                                    @error('new_password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="basic-default-name">Konfirmasi Password
                                    Baru</label>
                                <div class="col-sm-9">
                                    <input type="password"
                                        class="form-control @error('new_password_confirmation') is-invalid @enderror"
                                        id="basic-default-name" name="new_password_confirmation">
                                    @error('new_password_confirmation')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="/profile" class="btn btn-dark">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
