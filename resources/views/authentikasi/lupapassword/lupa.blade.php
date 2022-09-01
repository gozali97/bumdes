@extends('authentikasi.login.layout')
@section('css')
    
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="d-flex flex-column justify-content-center align-items-start">
            <a class="kembali-beranda" href="{{ url('/login') }}">
                <i class="fa-solid fa-arrow-left-long"></i> Kembali ke halaman login
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="row-12">
        <div class="d-flex flex-row justify-content-center">
            <div class="d-flex flex-column justify-content-center card-lupa-password">
                <h1 class="title-daftar-baru">Atur ulang password</h1>
                <p class="isi-daftar-baru">
                    Masukkan e-mail  yang terdaftar. kami akan mengirimkan<br> link reset password untuk atur ulang kata sandi
                </p>
                <form action="{{ url('/proses-lupapassword') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="label-form">Email*</label>
                        <input type="email" class="form-control input-form" name="email" placeholder="Masukan email anda">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lanjut">Lanjut</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    
@endsection
