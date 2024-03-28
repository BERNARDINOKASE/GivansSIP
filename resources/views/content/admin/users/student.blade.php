@extends('layouts.dashboard.main')
@section('title','Daftar Siswa')

@push('style')
    <link rel="stylesheet" href="{{asset('dashboard/')}}/compiled/css/table-datatable.css" />
    <link rel="stylesheet" href="{{asset('dashboard/')}}/extensions/simple-datatables/style.css" />
@endpush
@section('content')
<section class="section">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tabel Siswa</h3>
                <p class="text-subtitle text-muted">
                    Daftar nama siswa
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
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Tabel Siswa</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>No Handphone</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($student as $item)
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
                                    <a href="" class="ms-1 btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-placement="top" title="Ubah Password">
                                        Ubah password
                                    </a>
                                    <a href="" class="ms-1 btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-placement="top" title="Hapus Akun">
                                        <i class="bi bi-trash"></i>
                                        Hapus akun
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
@endpush