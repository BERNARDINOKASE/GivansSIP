@extends('layouts.homepage.main')

@section('title', 'Daftar akun')

@section('content')
<section class="login-form">
    <div class="container">
        <div class="login-area">
            <div class="row">
                <div class="login-form card">
                        <div class="col-lg-12">
                            <div class="text-center mt-10">
                                <h3 class="login-title">
                                    Daftar akun
                                </h3>
                            </div>
                        </div>
                        <div class="text-danger text-center">
                            @if ($errors->any())
                                @foreach ($errors->all() as $item)
                                    {{$item}}
                                @endforeach
                            @endif
                        </div>
                        <form method="POST" action="{{route('user.register')}}">
                            @csrf
                            <div class="mb-2">
                                <label for="nis/nip">NIS/NIP</label>
                                <input type="number" name="second_id" placeholder="NIS/NIP anda"/>
                            </div>
                            <div class="mb-2">
                                <label for="name">Nama</label>
                                <input type="text" name="full_name" placeholder="Nama anda"/>
                            </div>
                            <div class="mb-2">
                                <label for="gender">Jenis Kelamin</label>
                                <select class="form-select form-select" name="gender">
                                    <option selected value="">--Jenis Kelamin--</option>
                                    <option value="male">Pria</option>
                                    <option value="female">Wanita</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="phone_number">No Hp</label>
                                <input type="number" name="phone_number" placeholder="No hp anda"/>
                            </div>
                            <div class="mb-2">
                                <label for="gender">Peran</label>
                                <select class="form-select form-select" name="role">
                                    <option selected value="">--Peran--</option>
                                    <option value="student">Siswa</option>
                                    <option value="guest">Tamu</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="email">Alamat Email</label>
                                <input type="text" name="email" placeholder="Alamat email anda"/>
                            </div>
                            <div class="mb-2">
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="Password anda"/>
                            </div>
                            <div class="mb-2">
                                <label for="password_confirmation">Konfirmasi password</label>
                                <input type="password" name="password_confirmation" placeholder="Konfirmasi password anda"/>
                            </div>
                            <div class="login-footer">
                                <button type="submit" class="btn btn-primary w-100 mb-2">Daftar</button>
                                {{-- <div class="text-center m-2">Atau</div> --}}
                                <a href="{{route('login')}}" class="tex-primary text-end w-100">Sudah Punya Akun ?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!-- row -->
        </div>
    </div>
</section>
@endsection