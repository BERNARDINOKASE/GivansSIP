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
                                <a href="#" class="btn btn-warning btn-sm">{{$item->status}}</a>
                            </td>
                            <td class="d-lg-inline-flex">
                                <a href="{{route('report.edit', $item->id)}}" class="ms-1 btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="{{route('report.show', $item->id)}}" class="ms-1 btn btn-sm btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat detail">
                                    <i class="bi bi-info-circle"></i>
                                </a>
                                <form action="{{route('report.delete', $item->id)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="ms-1 btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top"title="Hapus"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-12">
            <!--Disabled Backdrop Modal -->
            <div class="modal modal-lg fade text-left" id="backdrop" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel4" data-bs-backdrop="false" aria-hidden="false">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel4">Form Tambah Laporan</h4>
                            <button type="button" class="close" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <form method="POST" action="{{route('report.store')}}">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-3">
                                        <label for="date_of_incident">Tanggal Kejadian</label>
                                        <input class="form-control" type="date" name="date_of_incident">
                                    </div>
                                    <div class="col-3">
                                        <label for="offense_id">Kategori Kejadian</label>
                                        <select class="form-select form-select" name="offense_id">
                                            <option selected value="">--Kategori Kejadian--</option>
                                            @foreach ($offense as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="location_of_incident">Lokasi Kejadian</label>
                                        <input class="form-control" type="text" name="location_of_incident">
                                    </div>
                                    <div class="col-12">
                                        <label for="chronology">Kronologi Kejadian</label>
                                        <textarea class="form-control" placeholder="Ceritakan kronologi dengan singkat padat dan jelas" name="chronology"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <label for="evidence">Bukti Kejadian</label>
                                        <input class="form-control" placeholder="Lampirkan bukti" type="string" name="evidence">
                                    </div>
                                </div>
                                {{-- <div class="row">
                                </div> --}}
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary ms-1">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
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