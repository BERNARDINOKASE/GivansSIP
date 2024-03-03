@extends('layouts.dashboard.main')
@section('title','Buat laporan')
@section('content')
<section id="multiple-column-form">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Laporan</h3>
                <p class="text-subtitle text-muted">
                    Formulir pengajuan laporan pengaduan
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
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Formulir Laporan</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form method="POST" action="{{route('report.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label for="date_of_incident">Tanggal Kejadian</label>
                                        <input type="date" id="date_of_incident" class="form-control" name="date_of_incident">
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label for="category of incident">Kategori Kejadian</label>
                                        <select class="form-select form-select" name="offense_id">
                                            <option selected value="">--Kategori Kejadian--</option>
                                            @foreach ($offense as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label for="location_of_incident">Lokasi Kejadian</label>
                                        <input type="text" id="location_of_incident" class="form-control" placeholder="Lokasi Kejadian"
                                            name="location_of_incident">
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label for="evidence">Bukti Kejadian</label>
                                        <input type="text" id="evidence" class="form-control"
                                            name="evidence" placeholder="Bukti Kejadian">
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="chronology">Kronologi</label>
                                        <textarea type="text" id="chronology" class="form-control" name="chronology" placeholder="Ceritakan kronologi anda"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                    {{-- <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection