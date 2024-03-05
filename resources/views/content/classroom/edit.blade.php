@extends('layouts.dashboard.main')
@section('title', 'Edit Kelas')
@section('content')
<section class="section">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Kelas </h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Beranda</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="">Kelas </a>
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
                <h5 class="card-title">Data Kelas</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('classroom.update', $class->id)}}">
                        @method('PUT')
                        @csrf
                        <div class="mb-2">
                            <div class="col-12">
                                <div class="">
                                    <label for="name">Nama Kelas</label>
                                    <input class="form-control" type="text" name="name" value="{{$class->name}}">
                                </div>
                                <div class="">
                                    <label for="class">Kelas</label>
                                    <input class="form-control" type="text" name="class" value="{{$class->class}}">
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