@extends('layouts.dashboard.main')
@section('title','Lihat Pengaduan')

@section('content')
<section class="section">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Detail Pengaduan Selesai di Proses</h3>
                <p class="text-subtitle text-muted">
                    Pengaduan - {{$report->id}}
                </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="">Laporan</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="">Detail</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8 col-md-8 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="card-title fs-1"></h4>
                            <h4 class="card-title">
                                
                            </h4>
                            <p class="fw-semibold fs-5">Id Pengaduan : </p>
                            <p class="card-text ms-3">{{$report->id}}</p>
                            <hr>
                            <p class="fw-semibold fs-5">Id Siswa : </p>
                            <a href="{{route('hrTeacher.reportUserShow', [$report->id, $report->users_id])}}" class="card-text ms-3">{{$report->users_id}}</a>
                            <hr>
                            <p class="fw-semibold fs-5">Kategori Kasus : </p>
                            <p class="card-text ms-3">{{$report->offense->name}}</p>
                            <hr>
                            <p class="fw-semibold fs-5">Tanggal Kejadian : </p>
                            <p class="card-text ms-3">{{$report->date_of_incident}}</p>
                            <hr>
                            <p class="fw-semibold fs-5">Lokasi Kejadian : </p>
                            <p class="card-text ms-3">{{$report->location_of_incident}}</p>
                            <hr>
                            <p class="fw-semibold fs-5">Bukti : </p>
                            <p class="card-text ms-3">{{$report->evidence}}</p>
                            <hr>
                            <p class="fw-semibold fs-5">Kronologi : </p>
                            <p class="card-text ms-3">{{$report->chronology}}</p>
                            <hr>
                            <p class="fw-semibold fs-5">Solusi : </p>
                            <p class="card-text ms-3">{{$report->solutions}}</p>
                            <hr>
                            <p class="fw-semibold fs-5">Catatan : </p>
                            <p class="card-text ms-3">{{$report->notes}}</p>
                            <hr>
                            <p class="fw-semibold fs-5">Status : </p>
                            <button class="btn btn-success ms-3">{{$report->status}}</button>
                            <hr>
                            <p class="fw-semibold fs-5">Waktu Pembuatan Pengaduan : </p>
                            <p class="card-text ms-3">{{$report->created_at}}</p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection