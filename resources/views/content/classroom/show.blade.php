@extends('layouts.dashboard.main')
@section('title', 'Detail Kelas')
@section('content')
<section class="section">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3></h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Beranda</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="">Kelas</a>
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
                            Detail Kelas
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
                                <input type="text" id="id" class="form-control" name="id" value="{{$classroom->id}}" disabled>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label" for="name">Nama Kelas</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" id="name" class="form-control" name="name" value="{{$classroom->name}}" disabled>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label" for="class">Kelas</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" id="class" class="form-control" name="class" value="{{$classroom->class}}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection