@extends('layouts.main_admin')
@section('main_content_admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- Statistik --}}
        <div class="row mb-3">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <span class="avatar-initial rounded bg-label-success">
                                    <i class='bx bxs-group' style='color:#00aa3e'></i>
                                </span>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Kunjungan Hari Ini</span>
                        <h3 class="card-title mb-2">{{ $guests_today }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <span class="avatar-initial rounded bg-label-primary">
                                    <i class='bx bx-group' style='color:#5300c0'></i>
                                </span>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Kunjungan Minggu Ini</span>
                        <h3 class="card-title mb-2">{{ $guests_week }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <span class="avatar-initial rounded bg-label-warning">
                                    <i class='bx bxs-calendar' style='color:#afa400'></i>
                                </span>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Kunjungan Bulan Ini</span>
                        <h3 class="card-title mb-2">{{ $guests_month }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <span class="avatar-initial rounded bg-label-danger">
                                    <i class='bx bxs-bar-chart-alt-2' style='color:#ff0202'></i></span>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Keseluruhan</span>
                        <h3 class="card-title mb-2">{{ $guests_all }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <div class="card">
                    <h5 class="card-header">Daftar Pengunjung Hari Ini [{{ date('Y-m-d') }}]</h5>
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
                                    @if ($value->date_created_guest == date('Y-m-d'))
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $value->name_guest }}</td>
                                            <td>{{ $value->description_guest }}</td>
                                            <td>{{ $value->agency_guest }}</td>
                                            <td>{{ $value->address_guest }}</td>
                                            <td>{{ $value->email_guest }}</td>
                                            <td>{{ $value->telp_guest }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
