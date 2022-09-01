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
                    <a href="{{ url('/profil-satu') }}" class="sebelumnya kembali-beranda">Sebelumnya</a>
                    <div class="d-flex flex-row justify-content-start">
                        <img class="progres" src="{{ asset('/assets/home/img/progres-2.png') }}">
                        <label class="label-progres">2/3</label>
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
                    <form action="{{ url('/proses/profildua') }}" method="POST">
                        @csrf
                        <div class="form-group" style="margin-top: 24px;">
                            <label class="label-form">Nama Intansi/BUM Desa</label>
                            <input type="text" class="form-control input-form" name="nama_bumdes" placeholder="Masukan nama Instansi / BUM Desa">
                        </div>
                        <div class="form-group" style="margin-top: 16px;">
                            <label class="label-form">Jabatan</label>
                            <input type="text" class="form-control input-form" name="jabatan" placeholder="Masukan jabatan anda">
                        </div>
                        <div class="form-group" style="margin-top: 16px;">
                            <label class="label-form">Provinsi anda</label>
                            <select class="form-control input-form" name="provinsi" id="province">
                                <option selected>Provinsi Anda</option>
                                @foreach ($provinces as $province)
                                <option value="{{ $province->id ?? '' }}">{{ $province->name ?? '' }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" style="margin-top: 16px;">
                            <label class="label-form">Kota anda</label>
                            <select class="form-control input-form" name="kota" id="kota">
                                <option hidden>Pilih Kota</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lanjut">Selanjutnya</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
    $('#province').on('change', function() {
       var layananID = $(this).val();
       if(layananID) {
           $.ajax({
               url: "/cities/"+layananID,
               type: "GET",
               dataType: 'JSON',
               success:function(data)
               {
                 if(data){
                    $('#kota').empty();
                    $('#kota').append('<option hidden>Pilih Kota</option>'); 
                    $.each(data,function(nama,kode){
                        $("#kota").append('<option value="'+kode+'">'+nama+'</option>');
                    });
                }else{
                    $('#course').empty();
                }
             }
           });
       }else{
        $('#course').append('<option hidden>Choose Course</option>'); 
       }
    });
    });
</script>
@endsection
