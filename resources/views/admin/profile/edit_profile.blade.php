@extends('layouts.main_admin')
@section('main_content_admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Edit Profil</h5>
                        <small class="text-muted float-end">Administrator</small>
                    </div>
                    <div class="card-body">
                        <form action="/profile/updateprofile" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                                        id="basic-default-name" name="username" value="{{ $user->username }}">
                                    @error('username')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="basic-default-name" name="name" value="{{ $user->name }}">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="basic-default-name" name="email" value="{{ $user->email }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
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
