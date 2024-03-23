@extends('layouts.dashboard.main')
@section('title','Kasus')
@push('style')
<link rel="stylesheet" href="{{('dashboard/')}}/extensions/simple-datatables/style.css">
<link rel="shortcut icon" href="{{('dashboard/')}}/compiled/svg/favicon.svg" type="image/x-icon">
@endpush
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h2>Kasus</h2>
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
            <div class ="alert alert-danger alert-dismissible show fade">
                <ul>
                    @foreach ($errors->all() as $error)
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <li>{{$error}}</li>                    
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
        @if (session ('success'))
        <div class ="my-3">
                <div class="alert alert-success alert-dismissible show fade">
                    
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ session ('success') }}
                </div>
            
        </div>
        @endif
    <section class="section">
        <div class="card">           
            <div class="card-header">
                <h4>Tabel Kasus</h4>
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
                                {{-- <a href="" class="btn icon btn-sm btn-warning"data-bs-toggle="tooltip" data-bs-placement="top"data-bs-toggle="modalUpdate"
                                    title="Ubah"><i class="bi bi-pencil"></i></a> --}}
                                    <form class="d-inline" action="{{route('offense.delete',$item->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <div class="modal-danger me-1 mb-1 d-inline-block">                                            
                                            <button type="button" title="Hapus" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#delete"><i class="bi bi-trash"></i>                                                
                                            </button>
                                
                                            <div class="modal fade text-left" id="delete" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel120" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-white"> <i class="fas fa-exclamation-triangle"></i> 
                                                            <h5 class="modal-title white" id="myModalLabel120">                                                              
                                                            </h5>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">                                    
                                                            Anda yakin Ingin Menghapus Kasus {{$item->name}}??
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Close</span>
                                                            </button>
                                                            <button type="submit" class="btn btn-danger ms-1"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Hapus</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                   
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