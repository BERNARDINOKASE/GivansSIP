@extends('layouts.dashboard.main')
@push('style')
<link rel="stylesheet" href="{{('dashboard/')}}/extensions/simple-datatables/style.css">
@endpush
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tabel Kasus</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url("/dashboard/admin")}}">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tabel Kasus</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
        @if ($errors->any())
        <div class ="my-3">
            <div class ="alert alert-danger ">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>                    
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
        @if (session ('success'))
        <div class ="my-3">
            <div class ="alert alert-success ">
                {{ session ('success') }}
            </div>
        </div>
        @endif
    <section class="section">
        <div class="card">           
            <div class="card-header">
                    <a href="#" class="btn icon icon-right btn-sm btn-primary "style="float: right;" data-bs-toggle="modal"
                    data-bs-target="#modalCreate"><i class="bi bi-plus-circle"></i> Tambah Kasus</a>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Kasus</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($offense as $item)
                        <tr>
                           <td>{{$loop->iteration}}</td>
                           <td>{{$item->name}}</td>
                            <td>                                
                                <a href="" class="btn icon btn-sm btn-warning"data-bs-toggle="tooltip" data-bs-placement="top"data-bs-toggle="modalUpdate"
                                    title="Ubah"><i class="bi bi-pencil"></i></a>
                                    <form class="d-inline" action="{{route('offense.delete',$item->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                            <button type="submit" title="Hapus"class="btn btn-danger"data-bs-dismiss="modal" data-bs-target="#Delete">
                                                <i class="bi bi-trash"></i><i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block"></span>
                                            </button>
                                </form>                                                        
                            </td>
                        </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('content.offense.create')          
        </div>
    </section>
</div>
@push('script')
<script src="{{('dashboard/')}}/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="{{('dashboard/')}}/static/js/pages/simple-datatables.js"></script>
@endpush
@endsection