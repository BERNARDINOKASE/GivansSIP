@extends('layouts.dashboard.main')
@section('title', 'Detail Siswa')
@section('content')
<section class="section">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Detail Siswa</h3>
                <p class="text-subtitle text-muted">
                    Id Siswa - {{$data->id}}
                </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="">Siswa</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="">Detail Siswa</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="card-title fs-1"></h4>
                            <h4 class="card-title">
                            </h4>
                        </div>
                        <div class=" col-xl-6 col-md-6 col-sm-12">
                            <p class="fw-semibold fs-5">Id Siswa : </p>
                            <p class="card-text ms-3">{{$data->id}}</p>
                            <hr>
                            <p class="fw-semibold fs-5">NIS : </p>
                            <p class="card-text ms-3">{{$data->second_id}}</p>
                            <hr>
                            <p class="fw-semibold fs-5">email : </p>
                            <p class="card-text ms-3">{{$data->email}}</p>
                            <hr>
                        </div>
                        <div class=" col-xl-6 col-md-6 col-sm-12">
                            <p class="fw-semibold fs-5">Nama : </p>
                            <p class="card-text ms-3">{{$data->full_name}}</p>
                            <hr>
                            <p class="fw-semibold fs-5">Jenis Kelamin </p>
                            @if ($data->gender == 'male')
                                <p class="card-text ms-3">Laki - laki</p>
                            @else
                                <p class="card-text ms-3">Perempuan</p>
                            @endif
                            <hr>
                            <p class="fw-semibold fs-5">No Hp: </p>
                            @if ($data->phone_number == null)
                            <p class="card-text ms-3">-- No Hp Belum diisi --</p>
                            @else
                            <p class="card-text ms-3">{{$data->phone_number}}</p>
                            @endif
                            <hr>
                        </div>
                            
                            <p class="fw-semibold fs-5">Peran : </p>
                            <p class="card-text ms-3">{{$data->role}}</p>
                            <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection