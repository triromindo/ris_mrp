@extends('layouts.main.user')

@section('title', 'Change Password')

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Ganti Password</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">

                    <div class="card card-warning">
                        <form action="{{ route('update-password') }}" method="POST" class="needs-validation"
                            novalidate="">
                            @csrf
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @elseif (session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label for="oldPasswordInput">Password Lama</label>
                                    <input name="old_password" id="oldPasswordInput" type="password"
                                        class="form-control" required="" value="{{ old('old_password') }}">
                                    <div class="invalid-feedback">
                                        Password Lama Tidak Boleh Kosong
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="newPasswordInput">Password Baru</label>
                                    <input name="new_password" id="newPasswordInput" type="password"
                                        class="form-control" required="" value="{{ old('new_password') }}">
                                    <div class="invalid-feedback">
                                        Password Baru Tidak Boleh Kosong
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="confirmNewPasswordInput">Konfirmasi Password Baru</label>
                                    <input name="new_password_confirmation" id="confirmNewPasswordInput" type="password"
                                        class="form-control" required=""
                                        value="{{ old('new_password_confirmation') }}">
                                    <div class="invalid-feedback">
                                        Konfirmasi Password Baru Tidak Boleh Kosong
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-warning">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </section>
</div>

@endsection
