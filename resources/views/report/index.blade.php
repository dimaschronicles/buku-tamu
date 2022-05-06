@extends('layouts.template_admin')
@section('content_admin')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ $title }}</h1>
        <hr>
        <div class="card">
            <form action="/report" method="GET">
                <div class="row p-3">
                    <div class="col-md-4">
                        <label for="tanggal_mulai" class="form-label">Tanggal
                            Mulai</label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
                            value="{{ old('tanggal_mulai') }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="tanggal_sampai" class="form-label">Tanggal Sampai</label>
                        <input type="date" class="form-control" id="tanggal_sampai" name="tanggal_sampai" required>
                    </div>
                    <div class="col-12 pt-3">
                        <button type="submit" class="btn btn-primary">Filter Laporan</button>
                        <a href="/report" class="btn btn-secondary"><i class="fas fa-redo"></i></a>
                    </div>
                </div>
            </form>
        </div>

        @if($tamu == '')
        <div class="card text-center mt-3">
            <div class="card-header">
                Perhatian
            </div>
            <div class="card-body">
                <h5 class="card-title">Silahkan isikan tanggalnya terlebih dahulu</h5>
            </div>
        </div>
        @else
        <div class="card mt-3">
            <div class="card-header">
                <i class="fas fa-filter me-1"></i>
                Hasil Filter Laporan
            </div>
            <div class="card-body">
                <a href="/report/printpdf/get-data?tanggal_mulai={{ $tanggal_mulai }}&tanggal_sampai={{ $tanggal_sampai }}"
                    target="_blank" class="btn btn-danger mb-3">Cetak PDF</a>
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Keperluan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Keperluan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($tamu as $t)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $t->nama }}</td>
                            <td>{{ $t->email }}</td>
                            <td>{{ $t->keperluan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
</main>
@endsection