@extends('layouts.main_admin')
@section('main_content_admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card text-center">
                    <div class="card-header">
                        <strong>Profil</strong>
                    </div>
                    <div class="card-body">
                        <img src="/assets/img/profile.png" alt="user-avatar" class="rounded" height="100" width="100">
                        <h5 class="card-title mt-3">{{ auth()->user()->username }}</h5>
                        <p class="card-text">{{ auth()->user()->name }} | {{ auth()->user()->email }}</p>
                        <a href="/profile/editprofile" class="btn btn-secondary">Edit Profil</a>
                        <a href="/profile/changepassword" class="btn btn-danger">Ganti Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
