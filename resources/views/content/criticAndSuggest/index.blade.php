@extends('layouts.homepage.main')
@section('title','Kritik dan Saran')
@section('content')
<section id="multiple-column-form">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Kritik dan Saran</h3>
                <p class="text-subtitle text-muted">
                    Formulir pengajuan kritik dan saran
                </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Dashboard</a>
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
                    <h4 class="card-title">Formulir Kritik dan Saran</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form method="POST" action="{{route('criticAndSuggest.store')}}">
                            @csrf
                            <div class="col">
                                <div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label for="category">Kategori </label>
                                        <select class="form-select form-select" name="category">
                                            <option selected value="">--Kategori --</option>
                                            
                                                <option value="Pengaduan"> Pengaduan </option>
                                                <option value="Kritik_dan_saran"> Kritik dan Saran </option>
                                            
                                        </select>
                                        @if ($errors->has('category'))
                                            <span class="text-danger">{{$errors->first('category')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-3 col-12">
                                    <div class="form-group">
                                        <label for="evidence">Bukti</label>
                                        <input type="text" id="evidence" class="form-control" name="evidence" placeholder="Bukti Kejadian">
                                        @if ($errors->has('evidence'))
                                            <span class="text-danger">{{$errors->first('evidence')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="descriptions">Deskripsi</label>
                                        <textarea type="text" id="descriptions" class="form-control" name="descriptions" placeholder="Ceritakan "></textarea>
                                        @if ($errors->has('descriptions'))
                                            <span class="text-danger">{{$errors->first('descriptions')}}</span>
                                        @endif
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