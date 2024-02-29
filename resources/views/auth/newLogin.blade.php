@extends('layouts.homepage.main')
@section('title','Masuk ke akun')
@section('content')
<section class="login-form position-relative">
    <div class="container">
        <div class="login-area">
            <div class="row">
                <div class="login-form card">
                        <div class="col-lg-12">
                            <div class="text-center mt-10">
                                <h3 class="login-title">
                                    Masuk ke akun
                                </h3>
                            </div>
                        </div>
                        <div class="text-danger text-center">
                            @if ($errors->any())
                            Email atau password salah
                            @endif
                        </div>
                        <form method="POST" action="{{route('login.user')}}">
                            @csrf
                            <div class="mb-2">
                                <label for="email">Email</label>
                                <input type="text" name="email" placeholder="Email anda" />
                            </div>
                            <div class="mb-2">
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="Pasword anda" />
                            </div>
                            <a href="" class="mb-2 d-flex justify-content-end">Lupa password?</a>
                            <div class="login-footer">
                                <button type="submit" class="btn btn-primary w-100">Masuk</button>
                                <div class="text-center m-2">Atau</div>
                                <a href="{{route('register')}}" class="btn btn-secondary w-100">Daftar Akun</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection