@extends('layouts.template_admin')
@section('content_admin')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ $title }}</h1>
        <hr>
        <div class="card p-3">
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label"><b>Nama</b></label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="nama" name="nama"
                        value="{{ $tamu->nama }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label"><b>Email</b></label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="email" name="email"
                        value="{{ $tamu->email }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="no_hp" class="col-sm-2 col-form-label"><b>No HP</b></label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="no_hp" name="no_hp"
                        value="{{ $tamu->no_hp }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label"><b>Alamat</b></label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="alamat" name="alamat"
                        value="{{ $tamu->alamat }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="keperluan" class="col-sm-2 col-form-label"><b>Keperluan</b></label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="keperluan" name="keperluan"
                        value="{{ $tamu->keperluan }}">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-2">
                    <a href="#" class="btn btn-secondary" onclick="window.close()">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection