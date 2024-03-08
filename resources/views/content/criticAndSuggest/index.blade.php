@extends('layouts.homepage.main')
@section('title','Kritik dan Saran')
@section('content')
<section class="critic-and-suggest-form position-static">
    <div class="container">
        <div class="critic-and-suggest-area">
            <div class="row">
                <div class="critic-and-suggest-form card position-static">
                    <div class="col-lg-12">
                        <div class="text-center mt-10">
                            <h4 class="critic-and-suggest-title">
                                Ajukan Kritik dan Saran
                            </h4>
                        </div>
                    </div>
                    <form method="POST" action="{{route('user.register')}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 mb-2">
                                <label for="category">Kategori</label>
                                <select class="form-select form-select" name="category">
                                    <option selected value="">--Kategori --</option>
                                        <option value="Pengaduan"> Pengaduan </option>
                                        <option value="Kritik_dan_saran"> Kritik dan Saran </option>
                                    
                                </select>
                                @if ($errors->has('category'))
                                    <span class="text-danger">{{$errors->first('category')}}</span>
                                @endif
                            </div>
                            <div class="col-sm-12 mb-2">
                                <label for="evidence">Bukti</label>
                                <input type="text" id="evidence" class="form-control" name="evidence" placeholder="Bukti Kejadian">
                                @if ($errors->has('evidence'))
                                    <span class="text-danger">{{$errors->first('evidence')}}</span>
                                @endif  
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="descriptions">Deskripsi</label>
                                <textarea type="text" id="descriptions" class="form-control" name="descriptions" placeholder="Ceritakan "></textarea>
                                @if ($errors->has('descriptions'))
                                    <span class="text-danger">{{$errors->first('descriptions')}}</span>
                                @endif
                            </div>
                            <div class="critic-and-suggest-footer">
                                <button type="submit" class="btn btn-primary w-100 mb-2">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection