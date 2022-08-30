@extends('layouts.main')
@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <img class="img-fluid" src="/assets/img/banyumas.png" alt="logo-banyumas" width="200px" />
                        <h5 class="card-title">Selamat Datang di Perpustakaan Daerah Kabupaten Banyumas</h5>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Form Pengunjung</h5>
                        <small class="text-muted float-end">Silahkan isi form berikut ini</small>
                    </div>
                    <div class="card-body">
                        <form action="/home" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('name_guest') is-invalid @enderror"
                                        id="basic-default-name" name="name_guest" placeholder="Nama Anda.."
                                        value="{{ old('name_guest') }}" autocomplete="off" />
                                    @error('name_guest')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Instansi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('agency_guest') is-invalid @enderror"
                                        id="basic-default-company" name="agency_guest" placeholder="Instansi Anda.."
                                        value="{{ old('agency_guest') }}" autocomplete="off" />
                                    @error('agency_guest')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea id="basic-default-message" name="address_guest"
                                        class="form-control @error('address_guest') is-invalid @enderror" placeholder="Alamat Anda..">{{ old('address_guest') }}</textarea>
                                    @error('address_guest')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control @error('email_guest') is-invalid @enderror"
                                        id="basic-default-company" name="email_guest" placeholder="Email Anda.."
                                        value="{{ old('email_guest') }}" autocomplete="off" />
                                    @error('email_guest')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">No HP/WA</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control @error('telp_guest') is-invalid @enderror"
                                        id="basic-default-company" name="telp_guest" placeholder="No HP/WA Anda.."
                                        value="{{ old('telp_guest') }}" />
                                    @error('telp_guest')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Keperluan</label>
                                <div class="col-sm-10">
                                    <textarea id="basic-default-message" name="description_guest"
                                        class="form-control @error('description_guest') is-invalid @enderror" placeholder="Keperluan Anda..">{{ old('description_guest') }}</textarea>
                                    @error('description_guest')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card text-center p-2">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            &copy; {{ date('Y') }}, made with ❤️ by
                            <a href="https://instagram.com/dimaschronicles" target="_blank"
                                class="footer-link fw-bolder">@dimaschronicles</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
