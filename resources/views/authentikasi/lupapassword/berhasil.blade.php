@extends('authentikasi.lupapassword.layout')
@section('css')
    
@endsection
@section('content')
<div class="row">
    <div class="row-12">
        <div class="d-flex flex-row justify-content-center" style="margin-top: 70px;">
            <div class="d-flex flex-column justify-content-center card-lupa-password  text-center">
                <div class="d-flex flex-row justify-content-center">
                    <img class="img-berhasil-lupa" src="{{ asset('/assets/home/img/berhasil2.png') }}">
                </div>
                <h1 class="pendaftaran-berhasil" style="text-align: center;">Password berhasil diubah</h1>
                <p class="desc-lupa-pwd">
                    Pakai password yang baru untuk masuk lagi ke Bumdes.id, Jangan bagikan kata sandi anda kesiapapun, ya!
                </p>
                <a href="{{ url('/login') }}"><button class="btn btn-lanjut">Masuk ke Bumde.id</button></a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    
@endsection
