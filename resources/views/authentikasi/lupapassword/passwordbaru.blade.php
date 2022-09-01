@extends('authentikasi.lupapassword.layout')
@section('css')
    
@endsection
@section('content')
<div class="row">
    <div class="row-12">
        <div class="d-flex flex-row justify-content-center" style="margin-top: 70px;">
            <div class="d-flex flex-column justify-content-center card-lupa-password">
                <h1 class="title-daftar-baru">Password Baru</h1>
                <p class="isi-daftar-baru" style="margin-top: 13px;">
                    buat password yang kuat untuk akun dengan e-mail<br> 
                    <b>{{ $email }}</b>
                </p>
                <form action="{{ url('/proses-password-baru', $email) }}" method="POST">
                    @csrf
                    <div class="form-group" style="margin-top: 24px;">
                        <label class="label-form">Password baru*</label>
                        <input type="password" class="form-control input-form" name="password" placeholder="Masukan password baru anda">
                    </div>
                    <div class="form-group" style="margin-top: 16px;">
                        <label class="label-form">Konfirmasi Password baru*</label>
                        <input type="password" class="form-control input-form" name="konfirmasi_password" placeholder="masukan ulang kata sandi baru anda">
                    </div>
                    <div class="row card-info-pwd">
                        <div class="col-1">
                            <div class="d-flex flex-row justify-content-center">
                                <div class="d-flex flex-column justify-content-center" style="height: 60px;">
                                    <img class="icon-info" src="{{ asset('/assets/home/img/info.png') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-11">
                            <div class="d-flex flex-row justify-content-start">
                                <div class="d-flex flex-column justify-content-start">
                                    <p class="text-info-pwd">
                                        setelah password diubah, silahkan masuk kembali dengan kata sandi baru 
                                    </p>
                                </div>
                            </div>
                        </div>
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
