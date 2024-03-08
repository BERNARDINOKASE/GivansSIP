@extends('layouts.dashboard.main')
@push('style')
    <link rel="stylesheet" href="{{asset('dashboard/')}}/extensions/quill/quill.snow.css">
    <link rel="stylesheet" href="{{asset('dashboard/')}}/extensions/quill/quill.bubble.css">
    <link href="https://cdn.quilljs.com/1.3.5/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/')}}/extensions/quill-emoji.css">
@endpush
@section('content')
<h2>Form Laporan Pengaduan Siswa</h2>
 <!-- Basic Horizontal form layout section start -->
 <section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-15 col-12">
            <div class="card">
                <div class="card-header">
                <h4>Data Diri</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        {{-- awal bagian form --}}
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="first-name-horizontal">Nama Lengkap</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name-horizontal" class="form-control" 
                                                name="fname" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="email-horizontal">Nomor Telepon</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="phone" id="email-horizontal" class="form-control" 
                                               name="email-id"placeholder="Nomor Telepon">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="contact-info-horizontal">Alamat Email</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="email" id="contact-info-horizontal" class="form-control" 
                                               name="contact"placeholder="Alamat Email">
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="input-group mb-6">
                                            <label class="input-group-text" for="inputGroupSelect01">Tingkat</label>
                                            <select class="form-select" id="inputGroupSelect01">
                                                <option selected>XI</option>
                                                <option value="1">X</option>
                                                <option value="2">XI</option>
                                                <option value="3">XII</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-md-4 mb-4">
                                        <div class="input-group mb-6">
                                            <label class="input-group-text" for="inputGroupSelect01">Kelas</label>
                                            <select class="form-select" id="inputGroupSelect01">
                                                <option selected>A</option>
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="3">C</option>
                                                <option value="4">D</option>
                                                <option value="5">E</option>
                                                <option value="6">F</option>
                                                <option value="7">G</option>
                                                <option value="8">H</option>
                                                <option value="9">I</option>
                                                <option value="10">J</option>
                                            </select>
                                        </div>
                                    </div> 
                                <h4>Deskripsi Pengaduan</h4>
                                <p>Ceritakan Secara Singkat Mengenai Kejadian Yang Mau Dilaporkan</p>
                                <div id="snow">
                                    <p>Saya Ingin Melaporkan Tentang...</p>
                                    <p><br></p>
                                </div>                                
                                <h4>Bukti Pendukung Laporan</h4>                               
                                <div class="col-md-6 mb-1">
                                    <fieldset>
                                    <div class="input-group mb-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01"><i
                                                    class="bi bi-upload"></i></label>
                                            <input type="file" class="form-control" id="inputGroupFile01">
                                        </div>
                                    </div>
                                    </fieldset>
                                </div>                               
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">
                                        Buat Pengaduan
                                    </button>
                                    <button type="reset"  class="btn btn-light-secondary me-1 mb-1">
                                        Batal
                                    </button>
                                </div>
                                </div>                               
                            </div>                         
                        </form>                       
               
@endsection
@push('script')
    <script src="{{asset('dashboard/')}}/extensions/quill/quill.min.js"></script>
<<<<<<< Updated upstream
    <script src="{{asset('dashboard/')}}/static/js/pages/quill.js"></script>   
@endpush
=======
    <script src="{{asset('dashboard/')}}/static/js/pages/quill.js"></script>
    <script src="https://cdn.quilljs.com/1.3.5/quill.js"></script>
    <script src="{{asset('dashboard')}}/extensions/quill-emoji.js"></script>   
@endpush
>>>>>>> Stashed changes
