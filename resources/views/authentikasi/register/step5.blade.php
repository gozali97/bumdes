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
                <div class="d-flex flex-column justify-content-center">
                    <a href="{{ url('/profil-dua') }}" class="sebelumnya kembali-beranda">Sebelumnya</a>
                    <div class="d-flex flex-row justify-content-start">
                        <img class="progres" src="{{ asset('/assets/home/img/progres-3.png') }}">
                        <label class="label-progres">3/3</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-column justify-content-start card-step-3">
                    <h1 class="title-step-3">Lengkapi Profil anda</h1>
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show alarm" role="alert">
                                <strong>Peringatan !!!</strong> {{ $error }}.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif
                    <form action="{{ url('/proses/profiltiga') }}" method="POST" class="konfirmasi">
                        @csrf
                        <div class="form-group" style="margin-top: 24px;">
                            <label class="label-form">Email*</label>
                            <div class="row email-terpakai">
                                <div class="col-12">
                                    <div class="d-flex flex-row justify-content-start">
                                        <p class="email-nya">{{ Session::get('email') }}</p>
                                        <img class="img-check" src="{{ asset('/assets/home/img/check.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 16px;">
                            <label class="label-form">Nomor Ponsel *</label>
                            <div class="input-group input-form">
                                <span class="input-group-text" id="basic-addon1">+62</span>
                                <input type="text" class="form-control" name="no_ponsel" placeholder="Masukan nomor telepon anda" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 16px;">
                            <label class="label-form">Password*</label>
                            <div class="input-group input-form">
                                <input type="password" class="form-control" name="password" id="pass" placeholder="Masukan password anda" aria-describedby="basic-addon1">
                                <span id="mybutton" onclick="change()" class="input-group-text">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 16px;">
                            <label class="label-form">Konfirmasi Password</label>
                            <div class="input-group input-form">
                                <input type="password" class="form-control" name="konfirmasi_password" id="pass2" placeholder="Masukan ulang password anda" aria-describedby="basic-addon1">
                                <span id="mybutton2" onclick="change2()" class="input-group-text">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="btn-submit" class="btn btn-lanjut">Selanjutnya</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>       
    $(document).on('click', '#btn-submit', function(e) {
        e.preventDefault();
        swal({
            title: 'Daftarkan akun',
            text: 'Apakah data yang anda masukan sudah benar',
            confirmButtonColor: '#0EA44D',
            buttons: {
                confirm : {text:'Konfirmasi',className:'sweet-warning'},
                cancel : 'Ubah'
            },
        }).then(function (result) {
            if (result) {
                $('.konfirmasi').submit();
            }
        });
    });
    </script>
<script>
    function change() {
        var x = document.getElementById('pass').type;
        if (x == 'password') {
            document.getElementById('pass').type = 'text';
            document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                            <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                            <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                            </svg>`;
        }
        else {
            document.getElementById('pass').type = 'password';
            document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                            <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                            </svg>`;
        }
    }
</script>
<script>
    function change2() {
        var x = document.getElementById('pass2').type;
        if (x == 'password') {
            document.getElementById('pass2').type = 'text';
            document.getElementById('mybutton2').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                            <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                            <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                            </svg>`;
        }
        else {
            document.getElementById('pass2').type = 'password';
            document.getElementById('mybutton2').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                            <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                            </svg>`;
        }
    }
</script>
@endsection
