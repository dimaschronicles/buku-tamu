@extends('layouts.template_main')
@section('content_main')
<div class="row pt-5">
    <div class="col-md-5 mb-3">
        <h1 class="display-6 text-center">Silahkan isi form dibawah ini!</h1>
        <div class="card">
            <div class="card-body">
                @include('sweetalert::alert')
                <form action="/tamu" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" placeholder="Nama Anda" value="{{ old('nama') }}">
                        <label for="nama">Nama Lengkap</label>
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="email">Alamat Email</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp"
                            name="no_hp" placeholder="0818-1234-1234" value="{{ old('no_hp') }}">
                        <label for="no_hp">No HP</label>
                        @error('no_hp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                            name="alamat" placeholder="Alamat Anda" value="{{ old('alamat') }}">
                        <label for="alamat">Alamat</label>
                        @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('keperluan') is-invalid @enderror"
                            placeholder="Apa keperluan anda" id="keperluan" name="keperluan"
                            style="height: 100px">{{ old('keperluan') }}</textarea>
                        <label for="keperluan">Keperluan</label>
                        @error('keperluan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md">
        <img src="/assets/undraw_personal_notebook_re_d7dc.svg" alt="" width="100%">
    </div>
</div>
@endsection