@extends('layouts.dashboard.main')
@section('title', 'Edit Laporan')
@section('content')
<section class="section">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Laporan</h3>
                {{-- <p class="text-subtitle text-muted">
                    Navbar will appear on the top of the page.
                </p> --}}
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
    <div class="row">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                <h5 class="card-title">Tabel Laporan</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('report.update', $report->id)}}">
                        @method('PUT')
                        @csrf
                        <div class="mb-2">
                            <div class="col-12">
                                <div class="">
                                    <label for="date_report">Tanggal</label>
                                    <input class="form-control" type="date" name="date_report" value="{{$report->date_report}}">
                                </div>
                                <div class="">
                                    <label for="offense_id">Kategori Kejadian</label>
                                    <select class="form-select form-select" name="offense_id">
                                        <option selected value="">--Kategori Kejadian--</option>
                                        @foreach ($offense as $item)
                                            <option value="{{$item->id}}" {{ ($item->id == $report->offense->id)? "selected" : "" }}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="">
                                    <label for="location_of_incident">Lokasi Kejadian</label>
                                    <input class="form-control" type="text" name="location_of_incident" value="{{$report->location_of_incident}}">
                                </div>
                                <div class="">
                                    <label for="evidence">Bukti Kejadian</label>
                                    <input class="form-control" placeholder="Lampirkan bukti" type="string" name="evidence" value="{{$report->evidence}}">
                                </div>
                                <div class="">
                                    <label for="chronology">Kronologi Kejadian</label>
                                    <textarea class="form-control" placeholder="Ceritakan kronologi dengan singkat padat dan jelas" name="chronology">{{$report->chronology}}</textarea>
                                </div>
                            </div>
                            
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
</section>
@endsection