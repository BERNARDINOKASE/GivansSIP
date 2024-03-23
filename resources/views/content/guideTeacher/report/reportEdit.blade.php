@extends('layouts.dashboard.main')
@section('title','Edit Pengaduan Siswa')
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
                    <h5 class="card-title">Laporan - {{$report->id}}</h5>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal"  method="POST" action="{{route('guideTeacher.reportUpdate', $report->id)}}">
                            @method('PATCH')
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="users_id">Pelapor</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control" name="users_id" value="{{$report->users_id}}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="date_of_incident">Tanggal Kejadian</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="date" class="form-control" name="date_of_incident" value="{{$report->date_of_incident}}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="offense_id">Kategori Kejadian</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control" name="offense_id" value="{{$report->offense->name}}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="location_of_incident">Lokasi Kejadian</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control" name="location_of_incident" value="{{$report->location_of_incident}}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="evidence">Bukti</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control" name="evidence" value="{{$report->evidence}}" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="chronology">Kronologi</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <textarea type="text" class="form-control" name="chronology" readonly>{{$report->chronology}}</textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="notes">Catatan Wali Kelas</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <textarea type="text" class="form-control" name="head_room_teacher_notes" readonly >{{$report->head_room_teacher_notes}}</textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="notes">Catatan Guru Bimbingan Konseling</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <textarea type="text" class="form-control" name="guide_teacher_notes">{{$report->guide_teacher_notes}}</textarea>
                                        @if ($errors->has('guide_teacher_notes'))
                                            <span class="text-danger">{{$errors->first('guide_teacher_notes')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="solutions">Solusi</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <textarea type="text" class="form-control" name="solutions" >{{$report->solutions}}</textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="status">Status Pengaduan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select class="form-control" id="basicSelect" name="status">
                                            <option value="">--Status Pengaduan--</option>
                                            <option value="menunggu" {{ ($report->status == "menunggu")? "selected" : "" }} >Menunggu</option>
                                            <option value="proses" {{ ($report->status == "proses")? "selected" : "" }} >Proses</option>
                                            <option value="selesai" {{ ($report->status == "selesai")? "selected" : "" }} >Selesai</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="disposition">Disposisi Pengaduan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select class="form-control" id="basicSelect" name="affairs_teacher_id">
                                            <option selected value="">--Disposisi Pengaduan--</option>
                                            @foreach ($affairsTeacher as $item)
                                            <option value="{{$item->id}}" >{{$item->full_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                    </div>
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