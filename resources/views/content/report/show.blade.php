@extends('layouts.dashboard.main')
@section('title', 'Detail laporan')
@section('content')
<section class="section">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Laporan</h3>
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
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="">
                        <h5 class="card-title">
                            Detail Laporan
                        </h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col">
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label" for="id">Id</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" id="id" class="form-control" name="id" value="{{$report->id}}" disabled>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label" for="offense_id">Kategori Laporan</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" id="offense_id" class="form-control" name="offense_id" value="{{$report->offense->name}}" disabled>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label" for="date_report">Tanggal Laporan</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" id="date_report" class="form-control" name="date_report" value="{{$report->date_report}}" disabled>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label" for="location_of_incident">Lokasi Kejadian</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" id="location_of_incident" class="form-control" name="location_of_incident" value="{{$report->location_of_incident}}" disabled>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label" for="chronology">Kronologi Kejadian</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <textarea type="text" id="chronology" class="form-control" name="chronology" disabled>{{$report->chronology}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label" for="solutions">Solusi</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" id="location_of_incident" class="form-control" name="location_of_incident" value="{{$report->solutions}}" disabled>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label" for="notes">Catatan</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" id="notes" class="form-control" name="notes" value="{{$report->notes}}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection