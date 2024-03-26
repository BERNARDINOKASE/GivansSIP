@extends('layouts.dashboard.main')
@section('title','Daftar Wali Kelas')

@push('style')
    <link rel="stylesheet" href="{{asset('dashboard/')}}/compiled/css/table-datatable.css" />
    <link rel="stylesheet" href="{{asset('dashboard/')}}/extensions/simple-datatables/style.css" />
@endpush
@section('content')
<section class="section">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tabel Wali Kelas</h3>
                <p class="text-subtitle text-muted">
                    Daftar nama wali kelas
                </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="">Wali Kelas</a>
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
                <h5 class="card-title">Tabel Wali Kelas</h5>
                </div>
                <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>No Handphone</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($headRoomTeacher as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->second_id}}</td>
                            <td>{{$item->full_name}}</td>
                            <td>{{$item->email}}</td>
                            {{-- <td>{{$item->class_rooms->name}}</td> --}}
                            {{-- <td>{{$item->gender}}</td> --}}
                            @if ($item->gender == 'male')
                                <td class="card-text ms-3">Laki - laki</td>
                            @else
                                <td class="card-text ms-3">Perempuan</td>
                            @endif
                            <td>{{$item->phone_number}}</td>
                            <td class="d-lg-inline-flex">
                                <a href="{{route('hrTeacher.studentShow', $item->id)}}" class="ms-1 btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                    {{-- <i class="bi bi-info-circle"></i> --}}
                                    Edit
                                </a>
                                <a href="{{route('hrTeacher.studentShow', $item->id)}}" class="ms-1 btn btn-sm btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat detail">
                                    <i class="bi bi-info-circle"></i>
                                </a>
                                <a href="{{route('hrTeacher.studentShow', $item->id)}}" class="ms-1 btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
                                    {{-- <i class="bi bi-info-circle"></i> --}}
                                    Hapus
                                </a>
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