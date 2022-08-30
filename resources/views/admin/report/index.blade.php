@extends('layouts.main_admin')
@section('main_content_admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card text-center">
            <div class="card-header">
                <strong>Rekapitulasi Pengunjung</strong>
            </div>
            <div class="card-body">
                <form action="/report">
                    <div class="row mb-3">
                        <div class="col-md-3 offset-sm-3">
                            <label for="from_date" class="form-label">Dari Tanggal</label>
                            <input type="date" class="form-control" id="from_date" name="from_date" required />
                        </div>
                        <div class="col-md-3">
                            <label for="till_date" class="form-label">Sampai Tanggal</label>
                            <input type="date" class="form-control" id="till_date" name="till_date" required />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Tampilkan Data</button>
                    <a href="/report" class="btn btn-danger text-white">Reset Data</a>
                </form>
            </div>
        </div>
        @if ($guests == null)
            <div class="card mt-3">
                <div class="card-header">
                    <strong>Silahkan masukan tanggal</strong>
                </div>
            </div>
        @else
            <div class="card mt-3">
                <h5 class="card-header">Daftar Pengunjung</h5>
                <div class="card-body">
                    <a href="/report/exportpdf?from_date={{ $_GET['from_date'] }}&till_date={{ $_GET['till_date'] }}"
                        class="btn btn-danger mb-3" target="blank">Download
                        PDF</a>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Keperluan</th>
                                    <th>Instansi</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>No HP/WA</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($guests as $key => $value)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $value->name_guest }}</td>
                                        <td>{{ $value->description_guest }}</td>
                                        <td>{{ $value->agency_guest }}</td>
                                        <td>{{ $value->address_guest }}</td>
                                        <td>{{ $value->email_guest }}</td>
                                        <td>{{ $value->telp_guest }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
