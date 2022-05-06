@extends('layouts.template_admin')
@section('content_admin')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ $title }}</h1>
        <hr>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-user me-1"></i>
                Daftar Kunjungan Tamu
            </div>
            <div class="card-body">
                @include('sweetalert::alert')
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Kunjungan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tamu as $t)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $t->nama }}</td>
                            <td>{{ $t->email }}</td>
                            <td>{{ $t->no_hp }}</td>
                            <td>{{ date("Y-m-d h:i",strtotime($t->created_at)) }}</td>
                            <td>
                                <a href="/tamu/detail/{{ $t->id }}" class="btn btn-info" target="_blank"><i
                                        class="fas fa-info-circle"></i></a>
                                <form action="/tamu/{{ $t->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah data ini akan dihapus?')"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                                <a href="/tamu/edit/{{ $t->id }}" class="btn btn-warning"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection