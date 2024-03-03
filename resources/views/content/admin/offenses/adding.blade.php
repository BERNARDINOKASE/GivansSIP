@extends('layouts.dashboard.main')
@section('content')
<div class="card col-lg-6 col-md-6 col-sm-8 ">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Kasus</h4>
                            <form class="form" method="post">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="feedback1" class="sr-only">Id</label>
                                        <input type="text" id="feedback1" class="form-control" name="idkasus">
                                    </div>
                                    <div class="form-group">
                                        <label for="feedback4" class="sr-only">Nama Kasus</label>
                                        <input type="text" id="feedback4" class="form-control" name="name">
                                    </div>
                                <div class="form-actions d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
 @endsection