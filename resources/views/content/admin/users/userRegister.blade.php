@extends('layouts.dashboard.main')
@section('title','Tambah Pengguna')
@section('content')
<section id="multiple-column-form">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pengguna Baru</h3>
                <p class="text-subtitle text-muted">
                    Formulir Pendaftaran Pengguna Baru
                </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="">Pendaftaran Pengguna</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Formulir Pendaftaran Akun Baru</h4>
                </div>
                <div class="card-content">
                    @if (session ('success'))
                        <div class="m-2 alert alert-success alert-dismissible fade show" role="alert">
                            {{ session ('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session ('error'))
                        <div class="m-2 alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session ('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="row">
                            <form method="POST" action="{{route('admin.storeNewUser')}}">
                                @csrf
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="second_id">NIS/NIP</label>
                                        <input type="number" id="second_id" class="form-control" placeholder="Masukan NIS/NIP" name="second_id" value="{{old('second_id')}}">
                                        @if ($errors->has('second_id'))
                                            <span class="text-danger">{{$errors->first('second_id')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="full_name">Nama</label>
                                        <input type="text" id="full_name" class="form-control" placeholder="Nama lengkap anda" name="full_name" value="{{old('full_name')}}">
                                        @if ($errors->has('full_name'))
                                            <span class="text-danger">{{$errors->first('full_name')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="gender">Jenis Kelamin</label>
                                        <select class="form-select form-select" name="gender">
                                            <option selected value="">--Jenis Kelamin--</option>
                                            <option value="male">Pria</option>
                                            <option value="female">Wanita</option>
                                        </select>
                                        @if ($errors->has('gender'))
                                            <span class="text-danger">{{$errors->first('gender')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="phone_number">No Hp</label>
                                        <input type="text" id="phone_number" class="form-control" placeholder="No Hp anda" name="phone_number" value="{{old('phone_number')}}">
                                        @if ($errors->has('phone_number'))
                                            <span class="text-danger">{{$errors->first('phone_number')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="role">Peran</label>
                                        <select class="form-select form-select" name="role">
                                            <option selected value="">--Peran--</option>
                                            <option value="siswa">Siswa</option>
                                            <option value="waliKelas">Wali Kelas</option>
                                            <option value="guruBk">Guru Bk</option>
                                            <option value="kesiswaan">Kesiswaan</option>
                                            <option value="kepalaSekolah">Kepala Sekolah</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                        @if ($errors->has('role'))
                                            <span class="text-danger">{{$errors->first('role')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" id="email" class="form-control" placeholder="Email anda" name="email" value="{{old('email')}}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{$errors->first('email')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" placeholder="password anda" name="password">
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                    {{-- <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection