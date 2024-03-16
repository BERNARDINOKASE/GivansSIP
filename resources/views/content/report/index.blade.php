@extends('layouts.dashboard.main')
@section('title', 'Data laporan')
@push('style')
    <link rel="stylesheet" href="{{asset('dashboard/')}}/compiled/css/table-datatable.css" />
    <link rel="stylesheet" href="{{asset('dashboard/')}}/extensions/simple-datatables/style.css" />
@endpush
@section('content')
<section class="section">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Laporan</h3>
                <p class="text-subtitle text-muted">
                    Navbar will appear on the top of the page.
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
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- <button class="btn btn-md btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#backdrop">Tambah Laporan</button> --}}
    <div class="row">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                <h5 class="card-title">Tabel Laporan</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Tanggal Kejadian</th>
                                <th>Lokasi Kejadian</th>
                                <th>Bukti</th>
                                <th>Status Laporan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($report as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->offense->name}}</td>                            
                                <td>{{$item->date_of_incident}}</td>
                                <td>{{$item->location_of_incident}}</td>
                                <td>{{$item->evidence}}</td>
                                <td>
                                    @if ($item->status == "menunggu")
                                        <a href="#" class="btn btn-warning btn-sm">{{$item->status}}</a>
                                        @elseif ($item->status == "proses")
                                        <a href="#" class="btn btn-primary btn-sm">{{$item->status}}</a>
                                        @elseif ($item->status == "selesai")
                                        <a href="#" class="btn btn-success btn-sm">{{$item->status}}</a>
                                    @endif
                                </td>
                                <td class="d-lg-inline-flex">
                                    @if (auth()->user()->role == 'siswa')
                                    <a href="{{route('report.show', $item->id)}}" class="ms-1 btn btn-sm btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat detail">
                                        <i class="bi bi-info-circle"></i>
                                    </a>
                                    @elseif (auth()->user()->role == 'walikelas')
                                    <a href="{{route('hrTeacher.reportShow', $item->id)}}" class="ms-1 btn btn-sm btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat detail">
                                        <i class="bi bi-info-circle"></i>
                                    </a>
                                    <a href="{{route('hrTeacher.editReport', $item->id)}}" class="ms-1 btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    @elseif (auth()->user()->role == 'guruBk')
                                    <a href="" class="ms-1 btn btn-sm btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat detail">
                                        <i class="bi bi-info-circle"></i>
                                    </a>
                                    <a href="" class="ms-1 btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                        
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('script')
    <script src="{{asset('dashboard/')}}/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="{{asset('dashboard/')}}/static/js/pages/simple-datatables.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    }, false);
    </script>
@endpush