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
                                <input type="text" id="id" class="form-control" name="id" value="{{$report->id}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label" for="offense_id">Kategori Laporan</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" id="offense_id" class="form-control" name="offense_id" value="{{$report->offense->name}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label" for="date_of_incident">Tanggal Laporan</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" id="date_of_incident" class="form-control" name="date_of_incident" value="{{$report->date_of_incident}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label" for="location_of_incident">Lokasi Kejadian</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" id="location_of_incident" class="form-control" name="location_of_incident" value="{{$report->location_of_incident}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label" for="chronology">Kronologi Kejadian</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <textarea type="text" id="chronology" class="form-control" name="chronology" readonly>{{$report->chronology}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label" for="notes">Catatan Wali Kelas</label>
                            </div>
                            <div class="col-lg-10 col-9 mt-1">
                                @if ($report->head_room_teacher_notes == null)
                                <textarea type="text" id="notes" class="form-control" name="notes" readonly>
                                    Belum ada catatan yang diberikan atau belum pengangan kasus tidak sampai di walikelas        
                                </textarea>
                                @else
                                <textarea type="text" id="notes" class="form-control" name="notes" readonly>
                                    {{$report->head_room_teacher_notes}}
                                </textarea>
                                @endif
                            </div>
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label" for="notes">Catatan Guru Bimbingan Konseling</label>
                            </div>
                            <div class="col-lg-10 col-9 mt-1">
                                @if ($report->guide_teacher_notes == null)
                                <textarea type="text" id="notes" class="form-control" name="notes" readonly>
                                    Belum ada catatan yang diberikan atau pengangan kasus tidak sampai di guru Bimbingan Konseling        
                                </textarea>
                                @else
                                <textarea type="text" id="notes" class="form-control" name="notes" readonly>
                                    {{$report->guide_teacher_notes}}
                                </textarea>
                                @endif
                            </div>
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label" for="notes">Catatan Guru Kesiswaan</label>
                            </div>
                            <div class="col-lg-10 col-9 mt-1">
                                @if ($report->affairs_teacher_notes == null)
                                <textarea type="text" id="notes" class="form-control" name="notes" readonly>
                                    Belum ada catatan yang diberikan atau pengangan kasus tidak sampai di guru kesiswaan
                                </textarea>
                                @else
                                <textarea type="text" id="notes" class="form-control" name="notes" readonly>
                                    {{$report->affairs_teacher_notes}}
                                </textarea>
                                @endif
                            </div>
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label" for="notes">Catatan Kepala Sekolah</label>
                            </div>
                            <div class="col-lg-10 col-9 mt-1">
                                @if ($report->head_master_notes == null)
                                <textarea type="text" id="notes" class="form-control" name="notes" readonly>
                                    Belum ada catatan yang diberikan atau pengangan kasus tidak sampai di Kepala Sekolah
                                </textarea>
                                @else
                                <textarea type="text" id="notes" class="form-control" name="notes" readonly>
                                    {{$report->head_master_notes}}
                                </textarea>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label" for="solutions">Solusi</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <textarea type="text" id="solutions" class="form-control" name="solutions" value="{{$report->solutions}}" readonly></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection