@extends('authentikasi.register.layout')
@section('css')
    
@endsection
@section('content')
<div class="row">
    <div class="col-lg-6 sisi-kiri" id="sticky-sidebar" style="background-color: #0EA44D; min-height: 100vh;">
        <div class="sticky-top">
            <div class="sisi-kiri2" style="background-image: url(assets/home/img/Mask.png); min-height: 100vh;">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex flex-row justify-content-start card-logo-register">
                            <img class="logo-bumdes" src="{{ asset('/assets/admin/img/bumdes-logo.png') }}">
                            <img class="kebangkitan" src="{{ asset('/assets/home/img/kebangkitan.png') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 500px;">
                                        <img class="img-slider" src="{{ asset('/assets/home/img/slide1.png') }}">
                                        <h1 class="title-slider">
                                            Yuk asah potensi kamu
                                        </h1>
                                        <p class="isi-slider">
                                            Ikuti pelatihan yang didukung konsultan dan praktisi Bumdes sesuai dengan kebutuhan anda
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 500px;">
                                        <img class="img-slider" src="{{ asset('/assets/home/img/slide2.png') }}">
                                        <h1 class="title-slider">
                                            Pendampingan BUMDesa
                                        </h1>
                                        <p class="isi-slider">
                                            Ikuti pendampingan BUMDesa pemetaan potensi & pemilihan usaha Bumdes, Tata Kelola & Manajemen Operasional Bumdes, serta Akuntansi & Pertanggungjawaban Bumdes
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 500px;">
                                        <img class="img-slider" src="{{ asset('/assets/home/img/slide3.png') }}">
                                        <h1 class="title-slider">
                                            Layanan Digital
                                        </h1>
                                        <p class="isi-slider">
                                            ikuti Layanan digital untuk mendukung pengelolaan Bumdes, seperti Cek Kesehatan Usaha Bumdes (CKU), Sistem Aplikasi Akuntansi Bumdes (SAAB) dan layanan konsultasi lainnya
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6" id="main">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-column justify-content-center align-items-start">
                    <a class="kembali-beranda" href="{{ url('/') }}">
                        <i class="fa-solid fa-arrow-left-long"></i> Kembali Ke Beranda
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="d-flex flex-row justify-content-center">
                        <div class="d-flex flex-column justify-content-center card-form-register">
                            <h1 class="title-daftar-baru">Daftar Akun baru</h1>
                            <p class="isi-daftar-baru">
                                Gabung dan berkolaborasi bersama untuk kebangkitan<br> ekonomi Indonesia dari Desa di Bumdes.id
                            </p>
                            <form action="{{ url('/daftar/store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="label-form">Email*</label>
                                    <input type="email" class="form-control input-form" name="email" placeholder="Masukan email anda">
                                    <label class="desc-form">Contoh: nama@email.com</label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lanjut">Lanjut</button>
                                </div>
                            </form>
                            <p class="sudah-punya-akun">
                                Sudah memiliki akun? <a href="{{ url('/login') }}" style="color: #0EA44D; text-decoration:none;">Masuk</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    
@endsection
