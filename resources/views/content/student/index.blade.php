@extends('layouts.dashboard.main')
@push('style')
    <link rel="stylesheet" href="{{asset('dashboard/')}}/extensions/quill/quill.snow.css">
    <link rel="stylesheet" href="{{asset('dashboard/')}}/extensions/quill/quill.bubble.css">
@endpush
@section('title','Dashboard Siswa')
@section('content')
<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Selamat Datang {{auth()->user()->full_name}}</h3>
                    <p class="text-subtitle text-muted">
                        Anda telah masuk sebagai {{auth()->user()->role}}
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('student.index')}}">Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-start ">
                                <div class="stats-icon purple mb-2">
                                    <i class="iconly-boldShow"></i>
                                </div>
                            </div>
                            <div class="col-9">
                                <h6 class="text-muted font-semibold">Laporan di Ajukan</h6>
                                <h6 class="font-extrabold mb-0">{{$reports}}</h6>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card"> 
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-start ">
                                <div class="stats-icon blue mb-2">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                            </div>
                            <div class="col-9">
                                <h6 class="text-muted font-semibold">Laporan Dalam Proses</h6>
                                <h6 class="font-extrabold mb-0">{{$reportProcess}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-start ">
                                <div class="stats-icon green mb-2">
                                    <i class="iconly-boldAdd-User"></i>
                                </div>
                            </div>
                            <div class="col-9">
                                <h6 class="text-muted font-semibold">Laporan Selesai</h6>
                                <h6 class="font-extrabold mb-0">{{$reportSuccess}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  
@endsection
@push('script')
    <script src="{{asset('dashboard/')}}/extensions/quill/quill.min.js"></script>
    <script src="{{asset('dashboard/')}}/static/js/pages/quill.js"></script>   
@endpush
